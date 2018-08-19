<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <form data-toggle="validator" method="POST" id="form-add-district">
        <div class="header">
            <h3 class="panel-title"><?php echo $title ?></h3>
            <div class="side pull-right">
                <button class="btn btn-default btn-clean" onClick="clear_form('#validate_custom');" type="button">Clear
                    form
                </button>
            </div>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-3">Nama Kab / Kota :</div>
                <div class="col-md-9">
                    <select name="kota_id" id="kota_id" class="form-control" required></select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Kode</div>
                <div class="col-md-9"><input type="text" class="form-control" id="code" name="code"
                                             placeholder="Kode Kecamatan" data-error="Kode Kecamatan wajib diisi!"
                                             required></div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Nama Kecamatan</div>
                <div class="col-md-9"><input type="text" class="form-control" id="name" name="name"
                                             placeholder="Nama Kecamatan" cdata-error="Nama Kecematan wajib diisi!"
                                             required></div>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="footer">
            <div class="side pull-right">
                <div class="btn-group">
                    <button class="btn btn-default" type="button"
                            onclick="window.location = '<?php echo base_url() ?>master/address/kecamatan'">Batal
                    </button>
                    <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
