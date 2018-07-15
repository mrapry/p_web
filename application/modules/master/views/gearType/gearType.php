<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title ?></h2>
        <div class="side pull-right">
            <ul class="buttons">
                <li><a href="/master/vessel/addGearType"><span class="icon-plus"></span> Tambah Data</li>
            </ul>
        </div>
    </div>
    <div class="content">
        <table id="gearType" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#gearType').DataTable({
            ajax: {
                url: '<?php echo base_url()?>/master/gearType/getType',
                dataScr: "data.content",
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
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>master/vesselData/editVessel/' + full.id + '" class=" editor_edit">Edit</a> / <a href="#" class=" editor_remove" onclick="showModalRemove(\'' + full.name + '\',\'' + full.id + '\')">Delete</a>';
                    }
                }
            ]
        });
    });
</script>