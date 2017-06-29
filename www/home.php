<?php

	include("page/db.php");

?>
	
	<main class="site-main page-spacing">

		<div class="photo-slider container-fluid no-padding">

			<div id="main-carousel" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="slider-image">
							<img src="http://market/images/slider/slider-1.jpg" alt="slider-1"/>
							<div class="carousel-caption">
								<div class="container">
									<h5>Добро пожаловать на рыбалку</h5>
									<h3>Нам нравится рыбалка это всегда<span>способ расслабления</span></h3>
									<p>Мы уверены, что от мелких деталей зависят большие успехи Вашей рыбалки!  </p>
									<a href="http://market/index.php?id=3" title="Learn More" class="btn btn-default">Узнать больше</a>
									<a href="http://market/index.php?id=7" title="Contact Us" class="btn btn-default bg">Свяжитесь с нами</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slider-image">
							<img src="http://market/images/slider/slider-2.jpg" alt="slider-2"/>
							<div class="carousel-caption">
								<div class="container">
									<h5>Добро пожаловать на рыбалку</h5>
									<h3>Лучший путь к сердцу рыбака<span> через его снасти</span></h3>
									<p>Мы верим, что люди хотят быть здоровыми, благополучными и получать удовольствие от жизни, наш принцип - забота о людях. Мы прислушиваемся, исследуем и разрабатываем новинки, значимые для Вас!</p>
									<a href="http://market/index.php?id=3" title="Learn More" class="btn btn-default">Узнать больше</a>
									<a href="http://market/index.php?id=7" title="Contact Us" class="btn btn-default bg">Свяжитесь с нами</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="slider-image">
							<img src="http://market/images/slider/slider-3.jpg" alt="slider-3"/>
							<div class="carousel-caption">
								<div class="container">
									<h5>Добро пожаловать на рыбалку</h5>
									<h3>Ни что не делает рыбу больше<span>чем почти пойманную</span></h3>
									<p>Нам важен каждый клиент! Мы будем рады Вам и Вашим друзьям!</p>
									<a href="http://market/index.php?id=3" title="Learn More" class="btn btn-default">Узнать больше</a>
									<a href="http://market/index.php?id=7" title="Contact Us" class="btn btn-default bg">Свяжитесь с нами</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="intro-section tr-border container-fluid no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="intro-content">
							<i><img src="images/intro/choose-1.jpg" alt="choose-1"></i>
							<h3>Рыболовные снасти</h3>
							<p>Сдесь может быть размещен Ваш контент</p>
							<a href="#">Узнать больше</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="intro-content">
							<i><img src="images/intro/choose-2.jpg" alt="choose-2"></i>
							<h3>Рыболовные соревнования</h3>
							<p>Сдесь может быть размещен Ваш контент</p>
							<a href="#">Узнать больше</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="intro-content">
							<i><img src="images/intro/choose-3.jpg" alt="choose-3"></i>
							<h3>Приспособления для рыбалки</h3>
							<p>Сдесь может быть размещен Ваш контент</p>
							<a href="#">Узнать больше</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
		</div>

		<div id="accessories-section" class="accessories-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="accessories-img-box col-md-6">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="wheels">
						<div class="accessories-img img1"></div>
					</div>
					<div role="tabpanel" class="tab-pane" id="lure">
						<div class="accessories-img img2"></div>
					</div>
					<div role="tabpanel" class="tab-pane" id="lines">
						<div class="accessories-img img3"></div>
					</div>
					<div role="tabpanel" class="tab-pane" id="rods">
						<div class="accessories-img img4"></div>
					</div>
					<div role="tabpanel" class="tab-pane" id="bags">
						<div class="accessories-img img5"></div>
					</div>
				</div>			
			</div>
			
			<div class="col-md-7 accessories-tab-box">

                <div class="section-header">
                    <h3>Выберите аксессуары </h3>
                    <p>Категории товаров</p>
                </div>

                <div class="nav nav-tabs" role="tablist">
                    <a href="#wheels" aria-controls="wheels" role="tab" data-toggle="tab" class="active">
                        <i><img src="images/accessories/accessories-ic1.png" alt="Accessories Icon" /></i>
                        <span>Рыбаловные катушки</span>
                    </a>
                    <a href="#lure" aria-controls="lure" role="tab" data-toggle="tab">
                        <i><img src="images/accessories/accessories-ic2.png" alt="Accessories Icon" /></i>
                        <span>Приманки</span>
                    </a>
                    <a href="#lines" aria-controls="lines" role="tab" data-toggle="tab">
                        <i><img src="images/accessories/accessories-ic3.png" alt="Accessories Icon" /></i>
                        <span>Леска</span>
                    </a>
                    <a href="#rods" aria-controls="rods" role="tab" data-toggle="tab">
                        <i><img src="images/accessories/accessories-ic4.png" alt="Accessories Icon" /></i>
                        <span>Удилища</span>
                    </a>
                    <a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">
                        <i><img src="images/accessories/accessories-ic5.png" alt="Accessories Icon" /></i>
                        <span>Боксы, мебель</span>
                    </a>
                </div>
            </div>
            <div class="section-padding"></div>
        </div>

		<div id="gear-section" class="container-fluid no-padding gear-section">
			<div class="section-padding"></div>

			<div class="container">

				<div class="section-header">
					<h3>Необходимое оснащение</h3>
					<p>Большое разнообразие качественных рыбаловных снастей</p>
				</div>
				<div class="gear-carousel">
					<div class="gear-box">
						<a href="http://market/index.php?id=12" title="">
							<img src="images/gear/gear1.jpg" alt="Gear" />
							<span>Удилища</span>
						</a>
					</div>
					<div class="gear-box">
						<a href="http://market/index.php?id=13" title="">
							<img src="images/gear/gear2.jpg" alt="Gear" />
							<span>Катушки</span>
						</a>
					</div>
					<div class="gear-box">
						<a href="http://market/index.php?id=15" title="">
							<img src="images/gear/gear3.jpg" alt="Gear" />
							<span>Леска</span>
						</a>
					</div>
					<div class="gear-box">
						<a href="http://market/index.php?id=14" title="">
							<img src="images/gear/gear1.jpg" alt="Gear" />
							<span>Приманки</span>
						</a>
					</div>
					<div class="gear-box">
						<a href="http://market/index.php?id=16" title="">
							<img src="images/gear/gear3.jpg" alt="Gear" />
							<span>Боксы, мебель</span>
						</a>
					</div>
				</div>
			</div>
			<div class="white-seprator"></div>
		</div>
	</main>