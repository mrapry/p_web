<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <form>
        <div class="header">
            <h2><?php echo $title; ?></h2>
            <div class="side pull-right">
                <button class="btn btn-default btn-clean" onClick="clear_form('#validate');" type="button">Clear form
                </button>
            </div>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-3">Tipe Unit Kerja :</div>
                <div class="col-md-9">
                    <select name="type_id" id="type_id" class="form-control"
                            value="<?php echo $unitType->data->type; ?>"></select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Kode :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Kode Unit Kerja"
                           value="<?php echo $unitWorking->data->code; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Nama :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Unit Kerja"
                           value="<?php echo $unitWorking->data->name; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Alamat</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Nama Unit Kerja"
                           value="<?php echo $unitWorking->data->address; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Kab / Kota :</div>
                <div class="col-md-9">
                    <select name="kota_id" id="kota_id" class="form-control"
                            value="<?php echo $city->data->name; ?>"></select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Telepon :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon"
                           value="<?php echo $unitWorking->data->phone; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Faksimail :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="facsimile" name="facsimile" placeholder="facsimile"
                           value="<?php echo $unitWorking->data->facsimile; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Email :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                           value="<?php echo $unitWorking->data->email; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Latitude :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude"
                           value="<?php echo $unitWorking->data->latitude; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3">Longitude :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude"
                           value="<?php echo $unitWorking->data->longitude; ?>">
                </div>
            </div>
        </div>
            <div class="footer">
                <div class="side pull-right">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button"
                                onclick="window.location = '<?php echo base_url() ?>master/areas/index'">Kembali
                        </button>
                        <button class="btn btn-primary pull-right" type="button" onclick="edit();">Update</button>
                    </div>
                </div>
            </div>
    </form>
</div>