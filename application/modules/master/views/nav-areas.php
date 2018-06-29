<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="block">
                <div class="header">
                    <h2>Data Unit Kerja</h2>
                </div>
                <div class="content np">
                    <a href="<?php echo base_url()?>master/areas/" class="list-group-item">Unit Kerja</a>
                    <a href="<?php echo base_url()?>master/areas/typeUnit" class="list-group-item">Tipe Unit Kerja</a>
                    <a href="<?php echo base_url()?>master/areas/facilities" class="list-group-item">Sarana</a>
                    <a href="<?php echo base_url()?>master/areas/infrastructure" class="list-group-item">Prasarana</a>
                    <a href="<?php echo base_url()?>master/areas/mapping" class="list-group-item">Mapping Unit Kerja</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>