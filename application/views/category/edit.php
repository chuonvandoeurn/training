<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="<?php echo base_url(); ?>/categories/edit/<?php echo $category->id  ?>" method="post">	
		<?php $this->load->view('category/form',$category); ?>
	</form>
</body>
</html>