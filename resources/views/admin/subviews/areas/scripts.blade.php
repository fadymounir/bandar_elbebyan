@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
            {"data": "name_ar", name: "areas.name_ar"},
            {"data": "name_en", name: "areas.name_en"},
            {"data": "cities", name: "cities"},
            {"data": "is_active", name: "is_active"},
            {"data": "update", name: "update"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.areas.index')}}', function (send) {

        });
        oTable.build();

        $('.addNewArea').on('click', function () {
            resetFormToDefault();
            $('#exampleModalLabel').text('{{__('admin.create_new_area')}}');
            $('#action_type').val('createNewArea');
            $('#addEditِArea').modal('show');
        });

        $('#submit').on('click', function () {

            let form     = $('.form');
            let formData = new FormData(form[0]);
            let path     = "{{route('admin.areas.createArea')}}";
            if ($('#action_type').val() == 'editArea') {
                path = "{{route('admin.areas.updateArea')}}"
            }
            ajaxRequest(path, formData, function (response) {
                if (response.code == 200) {
                    swal("done!", response.Message, "success");
                    resetFormToDefault();
                    refreshTable();
                    $('#addEditِArea').modal('hide');
                }
            });
        });

        $('body').on('click', '.activation', function () {
            let areaId   = $(this).data('id');
            let formData = new FormData();
            formData.append('areaId', areaId);
            let path = "{{route('admin.areas.activation')}}";

            swal({
                title: "تفعيل & تعطيل المنطقة",
                text: "هل انت متاكد من اتمامك لعملية التفعيل او التعطيل المنطقة",
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

        $('body').on('click', '.editArea', function () {
            resetFormToDefault();
            let areaId   = $(this).data('id');
            let path     = "{{route('admin.areas.getAreaInfo')}}";
            let formData = new FormData();
            formData.append('areaId', areaId);
            ajaxRequest(path, formData, function (response) {
                $('#name_ar').val(response.Data.name_ar);
                $('#name_en').val(response.Data.name_en);
            });
            $('#area_id').val(areaId);
            $('#exampleModalLabel').text('{{__('admin.update_area')}}');
            $('#action_type').val('editArea');
            $('#addEditِArea').modal('show');
        });

    </script>
@endcomponent

