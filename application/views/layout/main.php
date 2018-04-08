<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('/layout/common/header');?>

<body>
    <div class="row">
    <?php $this->load->view('/layout/common/nav-top');?>
    </div>
    <?php $this->load->view($content); ?>
    <?php $this->load->view('/layout/javascript');?>
</body>

</html>