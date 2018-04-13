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
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var table = $('#userList').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '<?php echo base_url()?>/secman/user/getUserList',
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
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });
    function show_notif(tipe, message){
        if(tipe == 201 || tipe == 200){
            $("#respon_server").attr('class','alert alert-success');
        } else {
            $("#respon_server").attr('class','alert alert-danger');
        }
        $("#respon_server .message").html(message);
        $("#respon_server").show('slow');
    }


</script>
