@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
            {"data": "name_ar", name: "products.name_ar"},
            {"data": "name_en", name: "products.name_en"},
            {"data": "gold_weight", name: "products.gold_weight"},
            {"data": "diamond_weight", name: "products.diamond_weight"},
            {"data": "default_image", name: "products.default_image"},
            {"data": "price", name: "products.price"},
            {"data": "discount_value", name: "products.discount_value"},
            {"data": "discount_value", name: "products.discount_value"},
            {"data": "discount_type", name: "products.discount_type"},
            {"data": "is_available", name: "products.is_available"},
            {"data": "is_active", name: "products.is_active"},
            {"data": "actions", name: "actions"},
            {"data": "created_at", name: "created_at"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.admins.index')}}', function (send) {

        });
        oTable.build();

        $('.addNewUser').on('click', function () {
            resetFormToDefault();
            $('#exampleModalLabel').text('{{__('admin.create_new_admin')}}');
            $('#action_type').val('createNewAdmin');
            $('#addEditUser').modal('show');
        });

        $('#submit').on('click', function () {

            let form     = $('.form');
            let formData = new FormData(form[0]);
            let path     = "{{route('admin.admins.create')}}";
            if ($('#action_type').val() == 'editAdmin') {
                path = "{{route('admin.admins.update')}}"
            }
            ajaxRequest(path, formData, function (response) {
                if (response.code == 200) {
                    swal("done!", response.Message, "success");
                    resetFormToDefault();
                    refreshTable();
                    $('#addEditUser').modal('hide');
                }
            });
        });

        $('body').on('click', '.activation', function () {
            let userId   = $(this).data('id');
            let formData = new FormData();
            formData.append('user_id', userId);
            let path = "{{route('admin.admins.activation')}}";

            swal({
                title: "تفعيل & تعطيل المسئول",
                text: "هل انت متاكد من اتمامك لعملية التفعيل او التعطيل المسئول",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    ajaxRequest(path, formData, function (response) {
                        swal("done!", response.Message, "success");
                        oTable.draw();
                    });
                }
            });


        });

        $('body').on('click', '.editUser', function () {
            resetFormToDefault();
            let userId   = $(this).data('id');
            let path     = "{{route('admin.admins.getAdminInfo')}}";
            let formData = new FormData();
            formData.append('userId', userId);
            ajaxRequest(path, formData, function (response) {
                $('#name').val(response.Data.name);
                $('#phone').val(response.Data.phone);
                $('#email').val(response.Data.email);
                $('#role_id').val(response.Data.role_id);
            });
            $('#user_id').val(userId);
            $('#exampleModalLabel').text('{{__('admin.update_admin')}}');
            $('#action_type').val('editAdmin');
            $('#addEditUser').modal('show');
        });

    </script>
@endcomponent



