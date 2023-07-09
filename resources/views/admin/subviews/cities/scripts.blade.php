@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
            {"data": "name_ar", name: "cities.name_ar"},
            {"data": "name_en", name: "cities.name_en"},
            {"data": "districts", name: "districts"},
            {"data": "is_active", name: "is_active"},
            {"data": "update", name: "update"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.cities.index',['area_id'=>$area->id])}}', function (send) {

        });
        oTable.build();

        $('.addNewCity').on('click', function () {
            resetFormToDefault();
            $('#exampleModalLabel').text('{{__('admin.create_new_city')}}');
            $('#action_type').val('createNewCity');
            $('#addEditِCity').modal('show');
        });

        $('#submit').on('click', function () {

            let form     = $('.form');
            let formData = new FormData(form[0]);
            let path     = "{{route('admin.cities.createCity',['area_id'=>$area->id])}}";
            if ($('#action_type').val() == 'editCity') {
                path = "{{route('admin.cities.updateCity',['area_id'=>$area->id])}}"
            }
            ajaxRequest(path, formData, function (response) {
                if (response.code == 200) {
                    swal("done!", response.Message, "success");
                    resetFormToDefault();
                    refreshTable();
                    $('#addEditِCity').modal('hide');
                }
            });
        });

        $('body').on('click', '.activation', function () {
            let cityId   = $(this).data('id');
            let formData = new FormData();
            formData.append('cityId', cityId);
            let path = "{{route('admin.cities.activation',['area_id'=>$area->id])}}";

            swal({
                title: "تفعيل & تعطيل المدينة",
                text: "هل انت متاكد من اتمامك لعملية التفعيل او التعطيل المدينة",
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

        $('body').on('click', '.editCity', function () {
            resetFormToDefault();
            let cityId   = $(this).data('id');
            let path     = "{{route('admin.cities.getCityInfo',['area_id'=>$area->id])}}";
            let formData = new FormData();
            formData.append('cityId', cityId);
            ajaxRequest(path, formData, function (response) {
                $('#name_ar').val(response.Data.name_ar);
                $('#name_en').val(response.Data.name_en);
            });
            $('#city_id').val(cityId);
            $('#exampleModalLabel').text('{{__('admin.update_city')}}');
            $('#action_type').val('editCity');
            $('#addEditِCity').modal('show');
        });

    </script>
@endcomponent





