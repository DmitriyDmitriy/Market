<?php
	include("db.php");
?>
	<main class="site-main page-spacing">
		<!-- Page Banner -->
		<div class="page-banner contact-banner container-fluid no-padding">
			<div class="page-banner-content">
				<div class="container">
					<h3>Лови с нами!</h3>
					<p>Ты хочешь быть в центре происходящего, хочешь знать о новинках и быть в тренде - тогда заходи к Окуню!</p>
				</div>
			</div>
			<div class="banner-content container-fluid no-padding">
				<div class="container">
					<h4 class="pull-left">Вход</h4>
					<ol class="breadcrumb pull-right">
						<li><a href="http://market/index.php?id=1">Главная</a></li>							
						<li class="active">Войти на сайт</li>
					</ol>
				</div>
			</div>
		</div><!-- Page Banner /- -->
		<!-- Contact Us -->
		<div class="contact-us container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Войти на сайт</h3>
					<p>Для наших дорогих гостей</p>
				</div>
				<form class="contact-form" style="display: inline-block;">
					<div class="row" >
						<div class="form-group  col-md-12">
							<input type="text" name="contact-name" class="form-control" id="input_name" placeholder="Логин *" required/>
							<input type="password" name="contact-email" class="form-control" id="input_email" placeholder="Пароль *" required/>
						</div>

							<input type="submit" title="Enter"  value="Войти" id="btn_submit" name="post">

						<div id="alert-msg" class="alert-msg"><center><a href="http://market/index.php?id=9">Зарегистрироваться?</a></center></div>
					</div>
				</form>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Contact Us /- -->
	</main>

