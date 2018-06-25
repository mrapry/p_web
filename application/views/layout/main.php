<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('/layout/common/header');?>
<body class="bg-img-num1">
	<div class="container">
		<div class="row">
			<?php $this->load->view('/layout/common/nav-top');?>
		</div>
		<div class="row"><?php $this->load->view($content); ?></div>
		<?php $this->load->view('/layout/javascript');?>
	</div>
</body>
</html>