<!--suppress ALL -->
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
                <form>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select name="provinsi_id" id="provinsi_id" class="form-control"
                                value="<?php echo $provinsi->data->id; ?>">
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Kab / Kota</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Kode Kab / Kota"
                               value="<?php echo $city->data->code; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nama Kab / Kota</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kab / Kota"
                               value="<?php echo $city->data->name; ?>"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary pull-right" type="button" onclick="edit();">Update Data</button>
                        <button class="btn btn-default pull-right" type="button"
                                onclick="window.location = '<?php echo base_url() ?>master/address/kota'">Kembali
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

