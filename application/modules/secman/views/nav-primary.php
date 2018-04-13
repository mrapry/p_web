<div class="container">
    <div class="row">
        <div class="col-md-3">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Master User</h3>
                </div>
                <div class="list-group np">
                    <a href="<?php echo base_url() ?>secman/home/approvalUser" class="list-group-item">Approval User</a>
                    <a href="<?php echo base_url() ?>secman/home/listUser" class="list-group-item">List User</a>
                    <a href="<?php echo base_url() ?>secman/home/roleGroupUser" class="list-group-item">Role User</a>
                </div>
            </div>

        </div>

        <div class="col-md-9">
            <?php $this->load->view($content_detail); ?>
        </div>
    </div>
</div>