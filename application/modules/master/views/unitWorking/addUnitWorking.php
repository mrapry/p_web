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
                <form>
                    <div class="form-group col-md-12">
                        <label>Tipe Unit Kerja</label>
                        <select name="tipe_id" id="tipe_id" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Kode</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Kode Unit Kerja">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Unit Kerja">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Alamat</label>
                        <textarea class="form-control" aria-label="With textarea" id="address"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Faksimile</label>
                        <input type="text" class="form-control" id="faxmail" name="faxmail" placeholder="Faksimile">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Langitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Alamat Pelayanan</label>
                        <textarea class="form-control" aria-label="With textarea" id="serviceLocation"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right" type="button" onclick="save();">Simpan Data</button>
                        <button class="btn btn-default pull-right" type="button" onclick="window.location = '<?php echo base_url()?>master/areas/index'">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>