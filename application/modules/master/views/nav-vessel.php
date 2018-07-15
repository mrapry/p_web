<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="block">
                <div class="header">
                    <h2>Data Kapal</h2>
                </div>
                <div class="content np">
                    <a href="<?php echo base_url()?>master/fishingVessel/" class="list-group-item">Kapal</a>
                    <a href="<?php echo base_url()?>master/fishingVessel/company" class="list-group-item">Data Perusahaan</a>
                    <a href="<?php echo base_url()?>master/fishingVessel/vesselType" class="list-group-item">Jenis Kapal</a>
                    <a href="<?php echo base_url()?>master/fishingVessel/fishingGear" class="list-group-item">Alat Tangkap</a>
                    <a href="<?php echo base_url()?>master/fishingVessel/gearType" class="list-group-item">Jenis Alat Tangkap</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>