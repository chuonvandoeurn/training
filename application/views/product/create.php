<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>/products/create" method="post">
		<?php $this->load->view('product/form',$categories); ?>
	</form>
</body>
</html>