<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form data-toggle="validator" method="POST" id="form-add-province">
                    <div class="form-group">
                        <label>kode Province</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Kode Provinsi" data-error="Kode Provinsi wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Province</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Provinsi" data-error="Nama Provinsi wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary pull-right" type="submit">Simpan Data</button>
                        <button class="btn btn-default pull-right" type="button" onclick="window.location = '<?php echo base_url()?>master/address/provinsi'">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

