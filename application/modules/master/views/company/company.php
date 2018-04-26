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
                    <a href="/master/vesselData/addCompany">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row np-lr">
            <table id="company" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Jenis Perusahaan</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>Telepon</th>
                    <th>Faxmail</th>
                    <th>Email</th>
                    <th>Nomor SIUP</th>
                    <th>Tanggal SIUP</th>
                    <th>Nama Penanggung Jawab</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#company').DataTable({
            "scrollX": true,
            dom: 'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>/master/vesselData/getCompany',
                dataSrc: 'data.content',
                processing: true
            },
            columns: [
                {
                    "data": "name"
                },
                {
                    "data": "typeCompany"
                },
                {
                    "data": "address"
                },
                {
                    "data": "poscode"
                },
                {
                    "data": "phone"
                },
                {
                    "data": "faxmail"
                },
                {
                    "data": "siup"
                },
                {
                    "data": "siupDate"
                },
                {
                    "data": "qontrolQuality"
                },
                {
                    "data": "status"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>master/vesselData/editCompany/'+full.id+'" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

</script>