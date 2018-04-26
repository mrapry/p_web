<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Kapal</h3>
                </div>
                <div class="list-group np">
                    <a href="<?php echo base_url()?>master/vessel/" class="list-group-item">Kapal</a>
                    <a href="<?php echo base_url()?>master/vessel/company" class="list-group-item">Data Perusahaan</a>
                    <a href="<?php echo base_url()?>master/vessel/vesselType" class="list-group-item">Jenis Kapal</a>
                    <a href="<?php echo base_url()?>master/vessel/fishingGear" class="list-group-item">Alat Tangkap</a>
                    <a href="<?php echo base_url()?>master/vessel/gearType" class="list-group-item">Jenis Alat Tangkap</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>