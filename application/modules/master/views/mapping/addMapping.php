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
                    <div class="form-group">
                        <label>Pilih Tipe Mapping</label>
                        <select name="tipe" id="tipe" class="form-control" onchange="getTipe()">
                            <option value="1">UPT</option>
                            <option value="2">SATWAS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label id="parrent">Data UPT</label>
                        <select name="parrentOption" id="parrentOption" class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <label id="child">Data SATWAS</label>
                        <select name="childOption" id="childOption" class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary pull-right" type="button" onclick="save();">Simpan Data</button>
                        <button class="btn btn-default pull-right" type="button" onclick="window.location = '<?php echo base_url()?>master/areas/mapping'">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>