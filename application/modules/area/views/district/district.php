<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>

<div class="block">
    <div class="header">
        <h2><?php echo $title?></h2>
        <div class="side pull-right">
            <ul class="buttons">
                <li><a href="/area/address/add_district"><span class="icon-plus"></span> Tambah Kecamatan</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <table id="tbl_district" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="col-md-2">Kode</th>
                    <th>Nama Kecamatan</th>
                    <th>Kab / Kota</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal modal-danger" tabindex="-1" role="dialog" id="model_remove">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Kecamatan</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda setuju menghapus Kecamatan <br><br><strong><b id="dataDistrict"></b></strong></p>
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
        var table = $('#tbl_district').DataTable({
            processing: true,
            ajax: {
                url: '<?php echo base_url()?>area/district/getDistrict',
                dataSrc: 'data.content',
                data: function(d,settings){
                    var api = new $.fn.dataTable.Api( settings );
                    d.page = api.page.info().page;
                    d.size = d.length
                    d.search = d.search.value
                }

            },
            serverSide: true,
            columns: [
                {
                    "data": "code"
                },
                {
                    "data": "name"
                },
                {
                    "data": "city.name"
                },
                {
                    data: "",
                    className: "center",
                    render: function (data, type, full) {
                        return '<a href="<?php echo base_url()?>area/address/edit_district/'+full.id+'" class=" editor_edit"><span class="icon-edit"></span></a> | <a href="#" class=" editor_remove" onclick="showModalRemove(\''+full.name+'\',\''+full.id+'\')"><span class="icon-trash"></span></a>';
                    }
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });

    function showModalRemove(district, id) {
        $("#dataDistrict").html(district);
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
        $.ajax({
            type: "POST",
            url: "<?php echo base_url()?>area/district/deleteDistrict",
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