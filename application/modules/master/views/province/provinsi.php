
<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title?></h3>
      </div>
      <div class="panel-body">
      	<div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <a href="/master/address/addProvinsi">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
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
                    url: '<?php echo base_url()?>/master/province/getProvince',
                    dataSrc: 'content',
                    processing: true,
                },
                columns: [
                {
                    "data": "code"
                },
                {
                    "data": "name"
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