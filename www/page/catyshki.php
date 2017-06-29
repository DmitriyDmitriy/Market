	<?php

		include("db.php");

	?>
	<main class="site-main page-spacing">

		<div class="page-banner faq-banner container-fluid no-padding">
			<div class="page-banner-content">
				<div class="container">
					<h3>Frequently Asked Questions</h3>
					<p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
				</div>
			</div>
			<div class="banner-content container-fluid no-padding">
				<div class="container">
					<h4 class="pull-left">Вопрос - ответ</h4>
					<ol class="breadcrumb pull-right">
						<li><a href="http://market/index.php?id=1">Главная</a></li>
						<li class="active">Вопрос - ответ</li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="faq-section container-fluid no-padding">
			<div class="section-padding" style="height: 200px;  list-style-type: none;">
				<!--<div style="margin-left: 100px; cursor: pointer; width: 300px;">Сортировка:<li style="margin-left: 100px; margin-top: -20px;"><a id="sort" >Без сортировки</a></li>
				<ul id="sort-list" style="margin-left: 135px; width: 220px; height: 95px; position: absolute; border: 1px solid black;  list-style-type: none; display: none; background-color: #FFFFFF; padding-top: 2px;">
					<li><a href="index.php?price-asc">От дешовых к дорогим</a></li>
					<li><a href="index.php?price-desc">От дорогих к дешевым</a></li>
					<li><a href="index.php?id=19">Новинки</a></li>
					<li><a href="index.php?id=3">Без сортировки</a></li>
				</ul>
				</div>-->
			</div>

			<div class="container">
				<div class="row">

					<div class="content-area content-area75 col-md-9 col-sm-8">
						<?php
							$result = mysql_query("Select * 
													from goods 
													where id_catalog = 13
													"
											);
							while ($row = mysql_fetch_array($result)) {
								echo"
										<div class='col-md-3'>
											<div class='product-block'>
											<img src='../images/bd".$row['brand_img']."' class='logo' alt='product1' style='width: 100px; height: 25px;' />";

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
					
					<div class="widget-area widget-area22 col-md-3 col-sm-4">
						<aside class="widget widget-catagories">
							<h3 class="widget-title">Категории товаров</h3>
							<ul>
							<?php

								$result = mysql_query("Select * 
														from catalog");
								while ($row = mysql_fetch_array($result)) {
									echo"<li><a href='?id=".$row['id']."' title='".$row['title']."'>".$row['title']."</a></li>";
								}
							?>
							</ul>
							<!--<ul>
								<li><a href="#" title="Fishing Camp">Fishing Camp<span>09</span></a></li>
								<li><a href="#" title="Holiday Adventures">Holiday Adventures<span>10</span></a></li>
								<li><a href="#" title="Fishing Equipments">Fishing Equipments<span>07</span></a></li>
								<li><a href="#" title="Inter Club Meets">Inter Club Meets<span>11</span></a></li>
								<li><a href="#" title="Fishing Techniques">Fishing Techniques<span>13</span></a></li>
								<li><a href="#" title="Purchase Section">Purchase Section<span>07</span></a></li>
							</ul>-->
						</aside>
						<aside class="widget widget-latestposts">
							<h3 class="widget-title">Latest Posts</h3>
							<div class="latest-content">
								<a href="9-blog-post.html"><img src="images/blog/latest-post1.jpg" alt="blogpost-thumb1"></a>						
								<h3><a href="9-blog-post.html">Goodness lemur save much alas crud dear</a></h3>
								<span>09 Oct 2015</span>
							</div>
							<div class="latest-content">
								<a href="9-blog-post.html"><img src="images/blog/latest-post2.jpg" alt="blogpost-thumb2"></a>						
								<h3><a href="9-blog-post.html">However much enor mous merrily jeez</a></h3>
								<span>22 Nov 2015</span>
							</div>
							<div class="latest-content">
								<a href="9-blog-post.html"><img src="images/blog/latest-post3.jpg" alt="blogpost-thumb3"></a>						
								<h3><a href="9-blog-post.html">Flinched more mam moth this pompously</a></h3>
								<span>04 Dec 2015</span>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
		</div>
		
	</main>