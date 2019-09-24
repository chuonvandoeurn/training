<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="create" method="post">
		<?php $this->load->view('sale/form'); ?>
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
			var url_base= <?php base_url(); ?>;
			$('form').on('click', 'submit', function(event) {
				event.preventDefault();
				var name= $('#code').val();
				var name= $('#name').val();
				var name= $('#username').val();
				var name= $('#password').val();
				var url=$('from').attr('action');
				$.ajax({
					url: url_base+url,
					type: 'POST',
					dataType: 'json',
					data: {
						code: code,
						name: name,
						username:username ,
						password:password

					},
					success: function(response) {
						if(response.status==='save'){
							$('#code').val('');
							$('#name').val('');
							$('#username').val('');
							$('#password').val('');
						}
					}
					fail: function (response) {
						if(response.status!=='save'){
							$('input').css({
								color: 'red';
							});
						}
					}
				});
			});
		});
	</script>
</body>
</html>