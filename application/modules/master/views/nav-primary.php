<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="block">
                <div class="header">
                    <h2>Master Alamat</h2>
                </div>
                <div class="content np">
<!--                    <a href="--><?php //echo base_url()?><!--master/address/" class="list-group-item">Negara</a>-->
                    <a href="<?php echo base_url()?>master/address/provinsi" class="list-group-item">Provinsi</a>
                    <a href="<?php echo base_url()?>master/address/kota" class="list-group-item">Kabupaten / Kota</a>
                    <a href="<?php echo base_url()?>master/address/kecamatan" class="list-group-item">Kecamatan</a>
                    <a href="<?php echo base_url()?>master/address/kelurahan" class="list-group-item">Kelurahan</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>