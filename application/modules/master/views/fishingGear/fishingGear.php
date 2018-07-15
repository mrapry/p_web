<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title ?></h2>
        <div class="side pull-right">
            <ul class="buttons">
                <li><a href="/master/fishingVessel/addFishingGear"><span class="icon-plus"></span> Tambah Kelurahan</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content controls">
        <table id="fishingGear" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Nama Inggris</th>
                <th>Jenis Alat Tangkap</th>
                <th>Ukuran API</th>
                <th>Ukuran Kapal (GT)</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>



<script>
    $(document).ready(function () {
        var table = $('#fishingGear').DataTable({
            ajax: {
                url: '<?php echo base_url()?>/master/fishingGear/getGear',
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
                    "data": "english"
                },
                {
                    "data": "type"
                },
                {
                    "data": "size"
                },
                {
                    "data": "grossTonage"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>master/vesselData/editVessel/'+full.id+'" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

</script> 