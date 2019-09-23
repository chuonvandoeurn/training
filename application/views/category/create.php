<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="create" method="post">
		<?php $this->load->view('category/form'); ?>
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
			var url_base= <?php base_url(); ?>;
			$('form').on('click', 'submit', function(event) {
				event.preventDefault();
				var name= $('#name').val();
				var name= $('#description').val();
				var url=$('from').attr('action');
				$.ajax({
					url: url_base+url,
					type: 'POST',
					dataType: 'json',
					data: {
						name: name;
						description: description
					},
					success: function(response) {
						if(resopnse.status==='save'){
							$('#name').val('');
							$('#description').val('');
						}
					}
					fail: function (resopnse) {
						if(resopnse.status!==='save'){
							$('input').css({
								color: 'red';
							});
							$('input').css({
								color: 'red';
							});
						}
					}
				})
			});
		});
	</script>
</body>
</html>