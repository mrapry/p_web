
<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title?></h3>
      </div>
      <div class="panel-body">
      	<div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <a href="/master/address/add_provinsi">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
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
            <div class="row np-lr">
            <table id="example" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Kode Provinsi</th>
                        <th>Nama Provinsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
</div>

 <script>
          $(document).ready(function () {
            var table = $('#example').DataTable({
                dom: 'Bfrtip',
                ajax: {
                    url: '/assets/json/provinsi.json',
                    dataSrc: 'wilayah.provinsi',
                    processing: true,
                },
                columns: [
                {
                    "data": "provinsiKode"
                },
                {
                    "data": "provinsiNama"
                },
                { 
                    data: null,
                    className: "center",
                    defaultContent: '<a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
                }
                ],
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        });              
    </script>