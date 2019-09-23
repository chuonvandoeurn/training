<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<form action="<?php echo base_url(); ?>/products/edit/<?php echo $product->id  ?>" method="post">	
		<?php $this->load->view('product/form',$product,$categories); ?>
	</form>
</body>
</html>