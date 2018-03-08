<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo $title?>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" type="button">
                        <span class="fa fa-plus"></span> Tambah Data</button>
                </div>
                <!-- <span>Total Record</span> -->
                <div class="btn-group pull-right hidden">
                    <button class="btn btn-primary" type="button">
                        <span class="fa fa-print"></span> Print</button>
                    <button class="btn btn-primary" type="button">
                        <span class="fa fa-table"></span> Export</button>
                </div>
            </div>
        </div>
        <div class="row np-lr hidden">
            <table class="table table-hover table-striped table-bordered">

                <head>
                    <tr class="info">
                        <th style="width:50px">No</th>
                        <th>Nama Negara</th>
                        <th>Bendera</th>
                        <th>ISO</th>
                        <th class="col-md-2"></th>
                    </tr>
                </head>

                <body>
                    <tr>
                        <td>1</td>
                        <td>Indonesia</td>
                        <td></td>
                        <td>01.01.01</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning btn-xs">
                                    <span class="fa fa-pencil"></span> Edit</button>
                                <button class="btn btn-danger btn-xs">
                                    <span class="fa fa-recycle"></span> Hapus</button>
                            </div>
                        </td>
                    </tr>
                </body>
            </table>
        </div>
        <div class="row np-lr">
            <table id="example" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '/assets/json/example.json',
                dataSrc: 'countries.country',
                processing: true,
            },
            columns: [
                {
                    "data": "countryCode"
                },
                {
                    "data": "countryName"
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });


    });
</script>