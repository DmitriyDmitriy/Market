<?php

	include("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление товара</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<div class="admin">

			<?php
				include("admin_catalog.php");
			?>

		<div class="form_action">
			<form method="post" action="index.php?page=goods">
				Каталог товара:  
				<select name="catalog" size=1>
				<?php
					$catalog = mysql_query("Select * from catalog");

					while ($cat = mysql_fetch_array($catalog)) {
						echo"<option value='".$cat['id']."'>".$cat['title']."</option>";
					}
				?>
				</select></br>
				Бренд:
				<select name="brand" size=1>
				<?php
					$brand = mysql_query("Select * from brand_img");

					while ($br = mysql_fetch_array($brand)) {
						echo"<option value='".$br['id']."'>".$br['brand']."</option>";
					}
				?>
				</select></br>
				Логотип бренда: ../images/bd
				<input type="text" /></br>
				Наименование товара: 
				<input type="text" /></br>
				Информация о товаре:
				<input type="text" /></br>
				Тип товара:
				<select name="category" size=1>
				<?php
					$category = mysql_query("Select * from category");

					while ($br = mysql_fetch_array($category)) {
						echo"<option value='".$br['id']."'>".$br['type']."</option>";
					}
				?>
				</select></br>
				Пакозать товар в новинках 0 или 1:
				<select name="new" size=1>
					<option value='1'>1</option>
					<option value='0'>0</option>
				</select></br>
				Изображение товара: ../images/bd
				<input type="text" /></br>
				Цена:
				<input type="text" /></br>
				<input type="submit" name="add_goods" value="Добавить товар" />
			</form>
		</div>
	</div>
</body>
</html>