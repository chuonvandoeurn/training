<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>sales/edit/<?php echo $sale->Code ?>" method="POST">	
		<?php $this->load->view('sale/form',$sale); ?>
	</form>
</body>
</html>