class O_Datatable {

    constructor(table_id = '', url = '') {
        this.table_id = table_id
        this.url = url,
            this.buttons = [],

            this.columns = []
        this.dom = 'lBfrtip';

        this.tableObject = null
        this.orders      = []
    }


    addAjaxUrlWithData(url = '', data = null) {
        this.url        = url
        this.dataToSend = data || function () {
        }
        return this
    }


    addColumns(columns = []) {
        this.columns = columns
        return this
    }


    build() {
        let oTable = $(this.table_id).removeAttr('width').DataTable({
            order: this.orders,
            "processing": true,
            "serverSide": true,
            "lengthMenu": [[10, 25, 100, 500, -1], [10, 25, 100, 500, "All"]],
            "bAutoWidth": false,
            "ajax": {
                url: this.url,
                data: this.dataToSend
            },
            "columns": this.columns,
            dom: this.dom,
            buttons: this.buttons,
            pageLength: 10,
            scrollCollapse: true,
            columnDefs: [
                {width: '20%', targets: 0}
            ],
            fixedColumns: true,
            language: { // language settings
                "lengthMenu": "<span class='dt-length-style'> &nbsp;List &nbsp;&nbsp;_MENU_ &nbsp;Item&nbsp;&nbsp; </span>",
                "info": "<span class='dt-length-records'><i class='fa fa-globe'></i> &nbsp; Num Items :&nbsp;<span class='badge bold badge-dt'>_TOTAL_</span>&nbsp; </span>",
                "infoEmpty": "<span class='dt-length-records'>No records found to show</span>",
                "emptyTable": "No data available in table",
                "infoFiltered": "<span class=' '>(filtered from <span class='badge bold badge-dt'>_MAX_</span> total records)</span>",
                "zeroRecords": "No matching records found",
                "search": "",
                "fixedColumns": true,
                "paginate": {
                    "previous": "Previous",
                    "next": "Next",
                    "last": "Last",
                    "first": "First",
                    "page": "",
                    "pageOf": "<span class=' '>&nbsp;of&nbsFoundp;</span>",

                },
                "sProcessing": " <p class='alert alert-info'>   <i class=\"fas fa-sync fa-spin\"></i> </p>",
                "sPageButton": "button primary_button"
            }

        });

        oTable.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');


        this.tableObject = oTable;

    }

    draw() {
        if (this.tableObject) {
            this.tableObject.draw()
        }
    }

    /**
     * when you call this method
     * dataTableObject.orderBy([column_number, 'direction'])
     * dataTableObject.orderBy([0, 'desc'])
     *
     * @param orderColumn
     */
    orderBy(orderColumn) {
        this.orders.push(orderColumn)
        return this;
    }


}


function refreshTable() {
    // $('.globalDraw').val("all").selectpicker('refresh');
    // $('input[type="checkbox"]').prop("checked", false);
    // $('input[type="checkbox"]').val('test');
    oTable.draw();

}

$(".globalDraw").on("change", function () {
    oTable.draw();
});

$(".globalDrawClick").on("click", function () {
    oTable.draw();
});

$(document).ready(function () {
    $('div.dataTables_filter input').addClass('search-input');
    $('div.dataTables_filter input').css({'margin-left': '0px', 'border-top-left-radius': '0px', 'border-bottom-left-radius': '0px'});
    $('div.dataTables_filter input').before('<i class="fas fa-search search_input"></i>');
});

