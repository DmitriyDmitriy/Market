<?php

	include("db.php");

?>

		<div class="page-banner about-banner container-fluid no-padding">
			<div class="page-banner-content">
				<div class="container">
					<h3>Новинки</h3>
					<p>У нас Вы можете ознакомится с новым товаром первыми</p>
				</div>
			</div>
			<div class="banner-content container-fluid no-padding">
				<div class="container">
					<h4 class="pull-left">Новинки</h4>
					<ol class="breadcrumb pull-right">
						<li><a href="http://market/index.php?id=1">Главная</a></li>							
						<li class="active">Новинки</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="container-fluid no-padding product-section">
			
			<div class="container">
				<div class="section-padding"></div>

				<div class="section-header">
					<h3>Товары нашего магазина</h3>
					<p>Ознакомтесь с нашими новинками</p>
				</div> 
				<div class="row">
				<div class='product-carousel'>
						<?php
							$result = mysql_query("Select * 
													from goods 
													where new_goods = 1"
											);
							while ($row = mysql_fetch_array($result)) {
								echo"
										<div class='col-md-12'>
											<div class='product-block'>
											<img src='../images/bd".$row['brand_img']."' class='logo' alt='product1' style='width: 100px; height: 25px;' />";
								echo     $row['image_goods'];
								echo"	<div class='product-img-box'><img src='../images/bd".$row['image']."' alt=''/></div>
										<div class='product-info'>
											<h4>".$row['name']."</h4>
											<span>
												".$row['info']."
											</span>
											<h4>".$row['price'].".00 грн</h4>
										</div>
										<div class='product-hoverinfo'>
											<span>".$row['price'].".00 грн</span>
									    <a href='#'' title='Add to cart'>Добавить в корзину</a>
										</div>
										</div>
										</div>
									";
								}
						?>
						</div>
						</div>
				<a href="#" title="View All Products">Больше товаров</a>
				<div class="section-padding"></div>
			</div>
		</div>