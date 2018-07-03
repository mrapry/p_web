<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>
<div class="block">
    <form data-toggle="validator" method="POST" id="form-add-mapping">
        <div class="header">
            <h2><?php echo $title ?></h2>
            <div class="side pull-right">
                <button class="btn btn-default btn-clean" onClick="clear_form('#validate');" type="button">Clear form
                </button>
            </div>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-2">Pilih Tipe Mapping</div>
                <div class="col-md-9">
                    <select name="tipe" id="tipe" class="form-control" onchange="getTipe()">
                        <option value="1">UPT</option>
                        <option value="2">SATWAS</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2" id="parrent">Data UPT</div>
                <div class="col-md-9">
                    <select name="parrentOption" id="parrentOption" class="form-control"></select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2" id="child">Data SATWAS</div>
                <div class="col-md-9">
                    <select name="childOption" id="childOption" class="form-control"></select>
                </div>
            </div>
        </div>
            <div class="footer">
                <div class="side pull-right">
                    <div class="btn-group">
                        <button class="btn btn-default" type="button" onclick="window.location = '<?php echo base_url() ?>master/areas/mapping'">Kembali</button>
                        <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
    </form>
</div>
