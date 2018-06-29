<!--suppress ALL -->
<div class="alert alert-success" role="alert" id="respon_server" style="display: none">
    <p class="message"></p>
</div>

<div class="block">
    <form data-toggle="validator" method="POST" id="form-add-infrastructure">
        <div class="header">
            <h2><?php echo $title ?></h2>
            <div class="side pull-right">
                <button class="btn btn-default btn-clean" onClick="clear_form('#validate');" type="button">Clear form
                </button>
            </div>
        </div>
        <div class="content controls">
            <div class="form-row">
                <div class="col-md-2">Jenis Prasarana :</div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jenis Prasarana" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="side pull-right">
                <div class="btn-group">
                    <button class="btn btn-default" type="button"
                            onclick="window.location = '<?php echo base_url() ?>master/areas/infrastructure'">
                        Batal
                    </button>
                    <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>


