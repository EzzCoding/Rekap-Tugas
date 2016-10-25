<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	</head>
	<body>
		<script src="assets/js/jquery-3.1.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<div class="alert alert-success">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ullam quod, ex expedita eius optio soluta deserunt quia nostrum, quo itaque nam eaque dolorum doloribus distinctio! Dignissimos corporis delectus sapiente?
			<button class="btn btn-success" id="confirm">OK</button>
		</div>

		<script type="text/javascript">
			$(document).ready( function() {
				$('#confirm').click(function () {
					$(this).addClass('btn-danger');
					$(this).removeClass('btn-success');
					$(this).html('Anda Sudah Klik Button ini');
				})
			});
		</script>
	</body>
</html>