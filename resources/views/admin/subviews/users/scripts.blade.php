@component('admin.components.footer.DataTablesComponents')
    <script>
        var oTable = new O_Datatable('#table');
        oTable.addColumns([
                {"data": "name", name: "users.name"},
                {"data": "phone", name: "users.phone"},
                {"data": "email", name: "users.email"},
                {"data": "avatar", name: "users.avatar"},
                {"data": "is_active", name: "users.is_active"},
                {"data": "created_at", name: "users.created_at"},
                {"data": "update", name: "update"},
        ]);
        oTable.orderBy([1, 'desc']);
        oTable.addAjaxUrlWithData('{{route('admin.users.index')}}', function (send) {

        });
        oTable.build();
    </script>
@endcomponent



