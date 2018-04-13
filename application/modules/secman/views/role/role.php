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
                    <a href="/secman/home/addRole">
                        <button class="btn btn-primary" type="button">
                            <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row np-lr">
            <table id="roleList" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nama Role Group</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="model_remove">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Role</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda setuju menghapus role <br><br><strong><b id="dataRole"></b></strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnHapus" onclick="hapus()" data-dismiss="modal">Setuju</button>
            </div>
        </div>x
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#roleList').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>secman/role/getRole',
                dataSrc: 'data.content',
                processing: true
            }, columns: [
                {
                    "data": "name"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>secman/home/editRole/'+full.id+'" class=" editor_edit">Edit</a> | <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')">Delete</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });
    function showModalRemove(role, id) {
        $("#dataRole").html(role);
        $("#btnHapus").attr('onclick', 'hapus("'+id+'")');
        $("#model_remove").modal('show');
    }

    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }

    function hapus(id) {
        var id = id;

        var data = {
            id:id
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "/secman/role/deleteRole",
            data:dataSend,
            success: function (data) {
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        })
    }


</script>
