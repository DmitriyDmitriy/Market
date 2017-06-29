<?php

	include("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление Бренда</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<div class="admin">

			<?php
				include("admin_catalog.php");
			?>

		<div class="form_action">
			<form method="post" action="index.php?page=brand">
				Бренд:
				<input type="text" /></br>
				
				<input type="submit" name="add_brand" value="Добавить бренд" />
			</form>
		</div>
	</div>
</body>
</html>