<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>

<div class="block">
    <form>
        <div class="header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-3">Kode Provinsi :</div>
                <div class="col-md-9"><input type="text" class="form-control" id="code" name="code" placeholder="Kode Provinsi" value="<?php echo $province->data->code; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Nama Provinsi :</div>
                <div class="col-md-9"><input type="text" class="form-control" id="name" name="name" placeholder="Nama Provinsi" value="<?php echo $province->data->name; ?>">
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="side pull-right">
                <div class="btn-group">
                    <button class="btn btn-default" type="button"
                            onclick="window.location ='<?php echo base_url() ?>area/address/province'">Kembali
                    </button>
                    <button class="btn btn-primary pull-right" type="button" onclick="edit();">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

