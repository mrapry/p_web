<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="block">
       <div class="header">
           <h2><?php echo $title?></h2>
       </div>
    <div class="content">
        <table id="example" class="display responsive nowrap table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="model_remove">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Negara</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda setuju menghapus Negara<br><br><strong><b id="dataProvinsi"></b></strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnHapus" onclick="hapus()" data-dismiss="modal">Setuju</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            ajax: {
                url: '/assets/json/example.json',
                dataSrc: 'countries.country',
                processing: true,
            },
            columns: [
                {
                    "data": "countryCode"
                },
                {
                    "data": "countryName"
                }
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });


    });
</script>