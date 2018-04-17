<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right">
                    <a href="/master/areas/addUnitWorking">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row np-lr">
            <table id="unitWorking" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Faxmail</th>
                    <th>Email</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Tipe</th>
                    <th>Lokasi Pelayanan </th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        var table = $('#unitWorking').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>/master/unitWorking/getUnit',
                dataSrc: 'data.content',
                processing: true
            },
            columns: [
                {
                    "data": "code"
                },
                {
                    "data": "name"
                },
                {
                    "data": "address"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "faxmail"
                },
                {
                    "data": "email"
                },
                {
                    "data": "langitude"
                },
                {
                    "data": "longitude"
                },
                {
                    "data": "typeUnit.type"
                },
                {
                    "data": "serviceLocation"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>master/areas/editUnitWorking/'+full.id+'" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

</script>
