<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>

<div class="block">
    <form data-toggle="validator" method="POST" id="form-add-province">
        <div class="header">
            <h2><?php echo $title ?></h2>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-3">Kode Province :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Kode Provinsi" data-error="Kode Provinsi wajib diisi!" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Nama Provinsi :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Provinsi" data-error="Nama Provinsi wajib diisi!" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="side pull-right">
                <div class="btn-group">
                    <button class="btn btn-default" type="button"
                            onclick="window.location ='<?php echo base_url() ?>area/address/province'">Kembali
                    </button>
                    <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>



