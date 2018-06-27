<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p class="message"></p>
</div>
<div class="block">
    <div class="header">
        <h2><?php echo $title?></h2>
    </div>
    <div class="content controls">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label>Tipe Unit Kerja</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipe Unit Kerja">
                </div>
                <div class="form-group">
                    <div class="side pull-right">
                        <div class="btn-group">
                            <button class="btn btn-default" type="button" onclick="window.location = '<?php echo base_url()?>master/areas/typeUnit'">Kembali</button>
                            <button class="btn btn-primary" type="button" onclick="save();">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

