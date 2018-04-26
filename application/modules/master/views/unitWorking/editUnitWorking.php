<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title;?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group col-md-12">
                        <label>Tipe Unit Kerja</label>
                        <select name="type_id" id="type_id" class="form-control"value="<?php echo $unitType->data->type;?>"></select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Kode Unit Kerja</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Kode Unit Kerja" value="<?php echo $unitWorking->data->code;?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Unit Kerja" value="<?php echo $unitWorking->data->name;?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Nama Unit Kerja" value="<?php echo $unitWorking->data->address;?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon" value="<?php echo $unitWorking->data->phone;?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Faksimail</label>
                        <input type="text" class="form-control" id="faxmail" name="faxmail" placeholder="Faximail" value="<?php echo $unitWorking->data->faxmail;?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $unitWorking->data->email;?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Latitude</label>
                        <input type="text" class="form-control" id="langitude" name="langitude" placeholder="Latitude" value="<?php echo $unitWorking->data->langitude;?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude" value="<?php echo $unitWorking->data->longitude;?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Alamat Pelayanan</label>
                        <input type="text" class="form-control" id="serviceLocation" name="serviceLocation" placeholder="Alamat Pelayanan" value="<?php echo $unitWorking->data->serviceLocation;?>">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right" type="button" onclick="edit();">Update Data</button>
                        <button class="btn btn-default pull-right" type="button" onclick="window.location = '<?php echo base_url()?>master/areas/index'">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>