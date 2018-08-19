<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="block">
                <div class="header">
                    <h2>Master Alamat</h2>
                </div>
                <div class="content np">
                    <a href="<?php echo base_url()?>area/address/province" class="list-group-item">Provinsi</a>
                    <a href="<?php echo base_url()?>area/address/city" class="list-group-item">Kabupaten / Kota</a>
                    <a href="<?php echo base_url()?>area/address/district" class="list-group-item">Kecamatan</a>
                    <a href="<?php echo base_url()?>area/address/subdistrict" class="list-group-item">Kelurahan</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php $this->load->view($content_detail);?>
        </div>
    </div>
</div>