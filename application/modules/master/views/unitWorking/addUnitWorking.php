<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title?></h2>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form data-toggle="validator" method="POST" id="form-add-unitWorking">
                    <div class="form-group col-md-12">
                        <label>Tipe Unit Kerja</label>
                        <select name="tipe_id" id="tipe_id" class="form-control">
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nama Kab / Kota</label>
                        <select name="kota_id" id="kota_id" class="form-control"></select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Kode</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Kode Unit Kerja (*wajib diisi)" data-error="Kode Unit Kerja Wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Unit Kerja (*wajib diisi)" data-error="Nama Unit Kerja wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Alamat</label>
                        <textarea class="form-control" aria-label="With textarea" id="address" placeholder="Alamat (*wajib diisi)" data-error="Alamat wajib diisi" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telepon *" data-error="Telepon wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Faksimile</label>
                        <input type="text" class="form-control" id="faxmail" name="faxmail" placeholder="Faksimile">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Email</label>
                        <input class="form-control" id="email" name="email" placeholder="example@domain.com" type="email"
                        data-error="Gunakan alamat email yang benar">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude *" data-error="Latitude wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude *" data-error="Longitude wajib diisi!" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <hr/>
                    <div class="form-group col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Sarana</label>
                                    <div id="sarana"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Prasarana</label>
                                    <div id="prasarana"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="side pull-right">
                            <div class="btn-group">
                                <button class="btn btn-default" type="button"
                                onclick="window.location = '<?php echo base_url() ?>master/areas/index'">Kembali
                            </button>
                            <button class="btn btn-primary" type="submit">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>