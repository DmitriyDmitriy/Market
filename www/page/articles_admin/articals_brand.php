<?php
	include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель администратора</title>
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="admin">

			<?php
				include("admin_catalog.php");
			?>

		<div class="conteiner">
			<a href="index.php?page=brand&action=add_brand" style="margin-left: 150px;">Добавить бренд</a>
			<div class="admin-table">
				<h3 style="text-align: center;">Таблица брендов</h3>
				<table border="0">
					<tr>
						<th>id</th>
						<th>brand</th>
					</tr>
					
						<?php
							$result = mysql_query("Select * 
													from brand_img 
													"
											);
							while ($row = mysql_fetch_array($result)) {
								echo"<tr>
										<th>".$row['id']."</th>";
								echo"	<th>".$row['brand']."</th>";
					
								echo"	<th><a href='index.php?page=goods&action=edit&id=".$row['id']."'>Редактировать</a></th>";
								echo"	<th><a href='index.php?page=goods&action=delete&id=".$row['id']."'>Удалить</a></th>
									</tr>";
							}
						?>
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>
