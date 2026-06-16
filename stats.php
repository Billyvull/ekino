<?php 
session_start();
require 'vendorphp/db.php';
if(!isset($_SESSION['access']) || $_SESSION['access']!=true){
header("location:index.php");}
else{ ?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="cssadmin/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="cssadmin/bootstrap-grid.min.css">
	<link rel="stylesheet" href="cssadmin/magnific-popup.css">
	<link rel="stylesheet" href="cssadmin/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="cssadmin/select2.min.css">
	<link rel="stylesheet" href="cssadmin/admin.css?v=2">
	<link rel="stylesheet" href="cssadmin/font-awesome.css">
	<link rel="stylesheet" href="cssadmin/font-awesome.min.css">
	<link rel="icon" type="image/png" href="iconadmin/favicon.ico" sizes="32x32">
	<link rel="apple-touch-icon" href="iconadmin/favicon.ico">
	<meta name="robots" content="nofollow" />
	<title>Панель статистики - eKino</title>
</head>

<body>

	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.html" class="header__logo">
				<img src="img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<div class="sidebar">
		<a href="index.php" class="sidebar__logo">
			<img src="imgadmin/eKinoLogo.png" alt="">
		</a>

		<div class="sidebar">
			<a href="index.php" class="sidebar__logo">
				<img src="imgadmin/eKinoLogo.png" alt="">
			</a>
			<div class="sidebar__user">
				<div class="sidebar__user-img">
					<img src="imgadmin/user.svg" alt="">
				</div>
				<div class="sidebar__user-title">
					<span>Администратор</span>
					<p>eKino</p>
				</div>
			</div>
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/stats.php" class="sidebar__nav-link sidebar__nav-link--active">
						<ion-icon name="pie-chart-outline"></ion-icon>&nbsp;&nbsp;Статистика
					</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/apanel.php" class="sidebar__nav-link sidebar__nav-link">
						<ion-icon name="duplicate-outline"></ion-icon>&nbsp;&nbsp;Добавить фильм
					</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link">
						<ion-icon name="create-outline"></ion-icon>&nbsp;&nbsp;Редактирование
					</a>
				</li>
				<li class="sidebar__nav-item">
					<!-- <a href="https://ekino.me/message.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения</a> -->
					<a href="https://forms.yandex.ru/admin/myforms" class="sidebar__nav-link sidebar__nav-link"
						target="_blank">
						<ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения
					</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/videoerror.php" class="sidebar__nav-link sidebar__nav-link">
						<ion-icon name="alert-circle-outline"></ion-icon>&nbsp;&nbsp;Проблемы
					</a>
				</li>
				<li class="dropdown sidebar__nav-item">
					<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<ion-icon name="documents-outline"></ion-icon>&nbsp;&nbsp;Страницы
					</a>

					<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown"
						aria-labelledby="dropdownMenuMore">
						<li><a href="https://ekino.me/contact.php">Контакт форма</a></li>
						<li><a href="https://ekino.me/boevik.php">Боевики</a></li>
						<li><a href="https://ekino.me/drama.php">Драмы</a></li>
						<li><a href="https://ekino.me/detektiv.php">Детективы</a></li>
						<li><a href="https://ekino.me/komediya.php">Комедии</a></li>
						<li><a href="https://ekino.me/krimial.php">Криминалы</a></li>
						<li><a href="https://ekino.me/melodrama.php">Мелодрамы</a></li>
						<li><a href="https://ekino.me/multfilm.php">Мультфильмы</a></li>
						<li><a href="https://ekino.me/realfilm.php">На реал. событиях</a></li>
						<li><a href="https://ekino.me/priklyucheniya.php">Приключения</a></li>
						<li><a href="https://ekino.me/triller.php">Триллеры</a></li>
						<li><a href="https://ekino.me/uzhasy.php">Ужасы</a></li>
						<li><a href="https://ekino.me/fantastika.php">Фантастика</a></li>
					</ul>
				</li>
			</ul>
			<div class="sidebar__copyright">© 2021 eKino. <br>Create by <a href="https://vk.com/itpviga"
					target="_blank">Billyvull</a></div>
		</div>

		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/stats.php" class="sidebar__nav-link sidebar__nav-link--active">
					<ion-icon name="pie-chart-outline"></ion-icon>
					</ion-icon>&nbsp;&nbsp;Статистика
				</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/apanel.php" class="sidebar__nav-link sidebar__nav-link">
					<ion-icon name="duplicate-outline"></ion-icon>&nbsp;&nbsp;Добавить фильм
				</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link sidebar__nav-link" target="_blank">
					<ion-icon name="create-outline"></ion-icon>&nbsp;&nbsp;Редактирование
				</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/message.php" class="sidebar__nav-link sidebar__nav-link" target="_blank">
					<ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения
				</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/videoerror.php" class="sidebar__nav-link sidebar__nav-link">
					<ion-icon name="alert-circle-outline"></ion-icon>&nbsp;&nbsp;Проблемы
				</a>
			</li>
		</ul>
		<div class="sidebar__copyright">© 2021 eKino. <br>Create by <a href="https://vk.com/itpviga"
				target="_blank">Evgeny Viga</a></div>
	</div>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Панель статистики </h2>

						<a href="https://ekino.me/apanel.php" class="main__title-link">Добавить фильм</a>
					</div>
				</div>
				<!-- end main title -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Всего просмотров</span>
						<p><?php echo statsone(); ?></p>
						<i class="fa fa-eye fa-fw" aria-hidden="true"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Фильмов добавлено</span>
						<p><?php echo statstwo(); ?></p>
						<i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Открытых ссылок сегодня</span>
						<p><?php echo statstree(); ?></p>
						<i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Кликов по объявлению</span>
						<p>0</p>
						<i class="fa fa-link" aria-hidden="true"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-clock-o" aria-hidden="true"></i>Последнее добавление</h3>

							<!-- <div class="dashbox__wrap">
								<a class="dashbox__refresh" href="https://ekino.me/stats.php"><i
										class="fa fa-refresh fa-fw" aria-hidden="true"></i></a>
								<a class="dashbox__more" href="https://ekino.me/stats.php">View All</a>
							</div> -->
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>НАЗВАНИЕ</th>
										<th>ЖАНР</th>
										<th>РЕЙТИНГ</th>
										<th>ДАТА</th>
									</tr>
								</thead>
								<?php
						$f1 = statsfo();
						foreach ($f1 as $film) { ?>
								<tbody>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $film["id"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a
													href="https://ekino.me/<?php echo $film["url"]; ?>"
													class="main__table-text"><?php echo $film["title"]; ?></a></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["genre"]; ?></div>
										</td>
										<td>
											<div class="main__table-text main__table-text--rate"><i class="fa fa-star"
													aria-hidden="true"></i> <?php echo $film["rating"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo(format_date($film["date"])); ?>
											</div>
										</td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-line-chart" aria-hidden="true"></i>Топ просмотров</h3>

							
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>НАЗВАНИЕ</th>
										<th>ЖАНР</th>
										<th>ПРОСМОТРОВ</th>
									</tr>
								</thead>
								<?php
						$f1 = statsfive();
						foreach ($f1 as $film) { ?>
								<tbody>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $film["id"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["title"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["genre"]; ?></div>
										</td>
										<td>
											<div class="main__table-text main__table-text--green">
												<?php echo $film["views"]; ?></div>
										</td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-user-circle" aria-hidden="true"></i> Последние пользователи</h3>

							
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>USERHASH</th>
										<th>URI</th>
										<th>REF</th>
										<th>DATE</th>
									</tr>
								</thead>
								<?php
						$f1 = statssix();
						foreach ($f1 as $film) { ?>
								<tbody>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $film["userhash"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a
													href="https://ekino.me/<?php echo $film["uri"]; ?>"><?php echo $film["uri"]; ?></a>
											</div>
										</td>
										<td>
											<div class="main__table-text"><a
													href="<?php echo $film["ref"]; ?>"><?php echo $film["ref"]; ?></a>
											</div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["date"]; ?></div>
										</td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Проблемы видео</h3>

							
						</div>

						<div class="dashbox__table-wrap">
							<table class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>НАЗВАНИЕ</th>
										<th>СТАТУС</th>
									</tr>
								</thead>
								<?php
						$f1 = statsseven();
						foreach ($f1 as $film) { ?>
								<tbody>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $film["id"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a
													href="<?php echo $film["url"]; ?>"><?php echo $film["name"]; ?></a>
											</div>
										</td>
										<td>
											<div class="main__table-text main__table-text--<?php echo $film["C"]; ?>">
												<?php echo $film["C"]; ?></div>
										</td>
									</tr>
								</tbody>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<!-- end dashbox -->


				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-comments" aria-hidden="true"></i>Последние комментарии</h3>

							<!-- <div class="dashbox__wrap">
								<a class="dashbox__refresh" href="https://ekino.me/videoerror.php"><i
										class="fa fa-refresh fa-fw" aria-hidden="true"></i></a>
								<a class="dashbox__more" href="https://ekino.me/videoerror.php">View All</a>
							</div> -->
						</div>
						<!-- <div id="mc-last"></div>
<script type="text/javascript">
cackle_widget = window.cackle_widget || [];
cackle_widget.push({widget: 'CommentRecent', id: 79654, size: '6', textSize: '150', timeFormat: 'ago'});
(function() {
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script> -->
					</div>
				</div>
				<!-- end dashbox -->

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Модерация комментариев</h3>

							
						</div>
						<div id="mc-last"></div>
						<div id="mc-comment-admin"></div>
						<!-- <script type="text/javascript">
							cackle_widget = window.cackle_widget || [];
							cackle_widget.push({
								widget: 'CommentAdmin'
							});
							(function () {
								var mc = document.createElement('script');
								mc.type = 'text/javascript';
								mc.async = true;
								mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/admin.js';
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(mc, s.nextSibling);
							})();
						</script> -->
					</div>
				</div>
				<!-- end dashbox -->

			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="jsadmin/jquery-3.5.1.min.js"></script>
	<script src="jsadmin/bootstrap.bundle.min.js"></script>
	<script src="jsadmin/jquery.magnific-popup.min.js"></script>
	<script src="jsadmin/jquery.mousewheel.min.js"></script>
	<script src="jsadmin/jquery.mCustomScrollbar.min.js"></script>
	<script src="jsadmin/select2.min.js"></script>
	<script src="jsadmin/admin.js"></script>
</body>

</html>

<?php } ?>