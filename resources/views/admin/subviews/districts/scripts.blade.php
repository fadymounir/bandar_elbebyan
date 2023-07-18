@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
            {"data": "name_ar", name: "districts.name_ar"},
            {"data": "name_en", name: "districts.name_en"},
            {"data": "is_active", name: "is_active"},
            {"data": "update", name: "update"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.districts.index',['area_id'=>$area->id,'city_id'=>$city->id])}}', function (send) {

        });
        oTable.build();

        $('.addNewDistrict').on('click', function () {
            resetFormToDefault();
            $('#exampleModalLabel').text('{{__('admin.create_new_district')}}');
            $('#action_type').val('createNewDistrict');
            $('#addEditDistrict').modal('show');
        });

        $('#submit').on('click', function () {

            let form     = $('.form');
            let formData = new FormData(form[0]);
            let path     = "{{route('admin.districts.createDistrict',['area_id'=>$area->id,'city_id'=>$city->id])}}";
            if ($('#action_type').val() == 'editDistrict') {
                path = "{{route('admin.districts.updateDistrict',['area_id'=>$area->id,'city_id'=>$city->id])}}"
            }
            ajaxRequest(path, formData, function (response) {
                if (response.code == 200) {
                    swal("done!", response.Message, "success");
                    resetFormToDefault();
                    refreshTable();
                    $('#addEditDistrict').modal('hide');
                }
            });
        });

        $('body').on('click', '.activation', function () {
            let districtId   = $(this).data('id');
            let formData = new FormData();
            formData.append('districtId', districtId);
            let path = "{{route('admin.districts.activation',['area_id'=>$area->id,'city_id'=>$city->id])}}";

            swal({
                title: "تفعيل & تعطيل الحي",
                text: "هل انت متاكد من اتمامك لعملية التفعيل او التعطيل الحي",
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

        $('body').on('click', '.editDistrict', function () {
            resetFormToDefault();
            let districtId   = $(this).data('id');
            let path     = "{{route('admin.districts.getDistrictInfo',['area_id'=>$area->id,'city_id'=>$city->id])}}";
            let formData = new FormData();
            formData.append('districtId', districtId);
            ajaxRequest(path, formData, function (response) {
                $('#name_ar').val(response.Data.name_ar);
                $('#name_en').val(response.Data.name_en);
            });
            $('#district_id').val(districtId);
            $('#exampleModalLabel').text('{{__('admin.update_district')}}');
            $('#action_type').val('editDistrict');
            $('#addEditDistrict').modal('show');
        });

    </script>
@endcomponent





