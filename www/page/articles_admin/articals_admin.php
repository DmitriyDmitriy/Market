<?php
	include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель администратора</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<div class="admin">
		<?php
			
				include("admin_catalog.php");
			
		?>
	</div>
	<script>
			(function() {
				var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
				if(isSafari) {
					document.getElementById('support-note').style.display = 'block';
				}
			})();
	</script>
</body>
</html>
