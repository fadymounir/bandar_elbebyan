@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
            {"data": "name_ar", name: "categories.name_ar"},
            {"data": "name_en", name: "categories.name_en"},
            {"data": "category_type", name: "category_type"},
            {"data": "parent_category", name: "parent_category"},
            {"data": "image", name: "categories.image"},
            {"data": "is_active", name: "categories.is_active"},
            {"data": "update", name: "update"},
            {"data": "created_at", name: "categories.created_at"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.categories.index')}}', function (send) {

        });
        oTable.build();


        function initInputsBasedInType() {
            let category_type = $('#category_type').val();
            if (category_type == 'main_category' || category_type == null) {
                $('.main_category_div').hide(400);
                $('.image_div').hide(400);
            }
            else {
                $('.main_category_div').show(400);
                $('.image_div').show(400);
            }
        }

        $('body').on('change', '#category_type', function () {
            initInputsBasedInType();
        });

        $('.addNewCategory').on('click', function () {
            resetFormToDefault();
            initInputsBasedInType();
            $('#exampleModalLabel').text('{{__('admin.create_new_category')}}');
            $('#action_type').val('createNewCategory');
            $('#addEditCategory').modal('show');
        });

        $('#submit').on('click', function () {

            let form     = $('.form');
            let formData = new FormData(form[0]);
            let path     = "{{route('admin.categories.create')}}";
            if ($('#action_type').val() == 'editCategory') {
                path = "{{route('admin.categories.update')}}"
            }
            ajaxRequest(path, formData, function (response) {
                if (response.code == 200) {
                    swal("done!", response.Message, "success");
                    resetFormToDefault();
                    refreshTable();
                    $('#addEditCategory').modal('hide');
                }
            });
        });

        $('body').on('click', '.activation', function () {
            let categoryId = $(this).data('id');
            let formData   = new FormData();
            formData.append('category_id', categoryId);
            let path = "{{route('admin.categories.activation')}}";

            swal({
                title: "تفعيل & تعطيل القسم",
                text: "هل انت متاكد من اتمامك لعملية التفعيل او التعطيل للمستخدم",
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

        $('body').on('click', '.editCategory', function () {
            resetFormToDefault();
            let categoryId = $(this).data('id');
            let path       = "{{route('admin.categories.getCategoryInfo')}}";
            let formData   = new FormData();
            formData.append('categoryId', categoryId);
            ajaxRequest(path, formData, function (response) {
                $('#name_ar').val(response.Data.name_ar);
                $('#name_en').val(response.Data.name_en);
                $('#main_category').val(response.Data.category_id);

                if (response.Data.category_id == null) {
                    $('#category_type').val('main_category').change();
                }
                else {
                    $('#category_type').val('sub_category').change();
                }

            });
            $('#category_id').val(categoryId);
            $('#exampleModalLabel').text('{{__('admin.update_category')}}');
            $('#action_type').val('editCategory');
            $('#addEditCategory').modal('show');
        });
    </script>
@endcomponent



