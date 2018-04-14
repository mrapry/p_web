<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title ?></h3>
    </div>
    <div class="panel-body">
        <div class="row np-lr">
            <table id="userList" class="display responsive nowrap table" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Role Group</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="model_approve">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Terima User</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda menerima user <br><br><b id="dataUser"></b> dengan akses user : <b id="roleUser"></b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnHapus" onclick="hapus()" data-dismiss="modal">Setuju</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="model_disapprove">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus User</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda menolak user <br><br><b id="dataUser"></b> dengan akses user : <b id="roleUser"></b></p>
                <p>Apabila anda yakin untuk menolak. Sistem akan melakukan penghapusan data user! </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnHapus" onclick="hapus()" data-dismiss="modal">Setuju</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#userList').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>/secman/user/getUserStatus',
                dataSrc: 'data.content',
                processing: true
            },
            columns: [
                {
                    "data": "roleGroup.name"
                },
                {
                    "data": "email"
                },
                {
                    render: function (data, type, full) {
                        return full.fname+" "+full.lname;
                    }
                },
                {
                    "data": "phoneNumber"
                },
                {
                    "data": "status"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="#" class="editor_remove" onclick="terima(\''+full.fname+' '+full.lname+'\', \''+full.roleGroup.name+'\' ,\''+full.id+'\')">Terima</a> | <a href="#" class="editor_remove" onclick="tolak(\''+full.fname+' '+full.lname+'\', \''+full.roleGroup.name+'\' ,\''+full.id+'\')">Tolak</a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

    function terima(nama, role, id) {
        $("#model_approve #dataUser").html(nama);
        $("#model_approve #roleUser").html(role);
        $("#model_approve #btnHapus").attr('onclick', 'pTerima("'+id+'")');
        $("#model_approve").modal('show');
    }

    function tolak(nama, role, id) {
        $("#model_disapprove #dataUser").html(nama);
        $("#model_disapprove #roleUser").html(role);
        $("#model_disapprove #btnHapus").attr('onclick', 'pTolak("'+id+'")');
        $("#model_disapprove").modal('show');
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
    
    function pTerima(id) {
        var id = id;

        var data = {
            id:id,
            status:"ACTIVATE"
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "/secman/user/updateStatus",
            data:dataSend,
            success: function (data) {
                // console.log(data);
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        })
    }

    function pTolak(id) {
        var id = id;

        var data = {
            id:id,
            status:"REMOVE"
        }

        var dataSend = {
            data : JSON.stringify(data)
        }

        console.log(dataSend);
        $.ajax({
            type: "POST",
            url: "/secman/user/updateStatus",
            data:dataSend,
            success: function (data) {
                // console.log(data);
                var data = JSON.parse(data);
                show_notif(data.code, data.message);
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        })
    }

</script>
