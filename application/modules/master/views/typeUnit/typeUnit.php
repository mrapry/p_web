<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title ?></h2>
        <div class="side pull-right">
            <ul class="buttons">
                <li><a href="/master/areas/addTypeUnit"><span class="icon-plus"></span> Tambah Data</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <table id="typeUnit" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tipe Unit Kerja</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        var table = $('#typeUnit').DataTable({
            ajax: {
                url: '<?php echo base_url()?>/master/typeUnit/getType',
                dataSrc: 'data.content',
                processing: true
            },
            columns: [
            {
                "data": "id"
            },
            {
                "data": "type"
            },
            {
                data: "",
                className: "center",
                render: function (data, type, full) {
                    return '<a href="<?php echo base_url()?>master/areas/editTypeUnit/'+full.id+'" class=" editor_edit"><span class="icon-edit"></span></a></a> | <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')"><span class="icon-trash"></span></a></a>';
                }
            }
            ],
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });
</script>