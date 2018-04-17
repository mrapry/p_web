<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Unit Kerja</h3>
                </div>
                <div class="list-group np">
                    <a href="<?php echo base_url()?>master/areas/" class="list-group-item">Unit Kerja</a>
                    <a href="<?php echo base_url()?>master/areas/typeUnit" class="list-group-item">Tipe Unit Kerja</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>