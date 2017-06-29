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
			<a href="index.php?page=goods&action=add_goods" style="margin-left: 150px;">Добавить товар</a>
			<div class="admin-table">
				<h3 style="text-align: center;">Таблица товаров</h3>
				<table border="0">
					<tr>
						<th>id</th>
						<th>id_catalog</th>
						<th>id_brand</th>
						<th>brand_img</th>
						<th>name</th>
						<th>info</th>
						<th>id_class</th>
						<th>new_goods</th>
						<th>image</th>
						<th>price</th>
						<th></th>
						<th></th>
					</tr>
					
						<?php
							$result = mysql_query("Select * 
													from goods 
													"
											);
							while ($row = mysql_fetch_array($result)) {
								echo"<tr>
										<th>".$row['id']."</th>";
								echo"	<th>".$row['id_catalog']."</th>";
								echo"	<th>".$row['id_brand']."</th>";
								echo"	<th>".$row['brand_img']."</th>";
								echo"	<th>".$row['name']."</th>";
								echo"	<th>".$row['info']."</th>";
								echo"	<th>".$row['id_class']."</th>";
								echo"	<th>".$row['new_goods']."</th>";
								echo"	<th>".$row['image']."</th>";
								echo"	<th>".$row['price']."</th>";
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
