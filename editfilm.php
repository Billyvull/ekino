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
	<link rel="stylesheet" href="cssadmin/ionicons.min.css">
	<link rel="stylesheet" href="cssadmin/admin.css?v=16">
	<style>
		.form-input {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100%;
			font-size: 16px;
			color: #fff;
			opacity: 0.85;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			border-color: #2D2D2F;
			background-color: rgba(255, 255, 255, 0.05);
			margin-right: 10px;
		}
	</style>
	<link rel="icon" type="image/png" href="iconadmin/favicon.ico" sizes="32x32">
	<link rel="apple-touch-icon" href="iconadmin/favicon.ico">
	<title>Каталог фильмов - eKino</title>

</head>

<body>
	<header class="header">
		<div class="header__content">
			<a href="https://ekino.me/" class="header__logo">
				<img src="imgadmin/eKinoLogo.png" alt="">
			</a>
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>

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
					<a href="https://ekino.me/stats.php" class="sidebar__nav-link">
						<ion-icon name="pie-chart-outline"></ion-icon>&nbsp;&nbsp;Статистика
					</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/apanel.php" class="sidebar__nav-link">
						<ion-icon name="duplicate-outline"></ion-icon>&nbsp;&nbsp;Добавить фильм
					</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link sidebar__nav-link--active">
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
				<a href="https://ekino.me/stats.php" class="sidebar__nav-link">
					<ion-icon name="pie-chart-outline"></ion-icon>Статистика
				</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/apanel.php" class="sidebar__nav-link"><i
						class="icon ion-ios-film"></i>Добавить фильм</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link sidebar__nav-link--active"
					target="_blank">
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
			<li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<ion-icon name="documents-outline"></ion-icon>&nbsp;&nbsp;Страницы
				</a>

				<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
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

	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="main__title">
						<h2>Редактирование фильмов</h2>
						<div class="main__title-wrap">

							<!-- <form action="" class="main__title-form" id="search-id">
								<input type="text" id="search-id-film" name="search-add" placeholder="Найти по ID...">
								<button type="submit" id="search-submit-id">
									<i class="icon ion-ios-search"></i>
								</button>
							</form> -->
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="main__table-wrap" id="samples_data_div">
						<table class="main__table" id="samples_data_table">
							<thead>
								<tr>
									<th>ID</th>
									<th>НАЗВАНИЕ</th>
									<th>РЕЙТИНГ</th>
									<th>ЖАНР</th>
									<th>ПРОСМОТРОВ</th>
									<th>СТАТУС</th>
									<th>ДАТА ПУБЛИКАЦИИ</th>
									<th>РЕДАКТАЦИЯ</th>
									<th>ФУНКЦИИ</th>
								</tr>
							</thead>
							<?php
						$f1 = get_films_all();
						foreach ($f1 as $film) { ?>
							<form action="editfilms" method="post">
								<tbody>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $film["id"]; ?></div>
											<input type="hidden" name="id" value="<?=$film["id"];?>">
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["title"]; ?></div>
										</td>
										<td>
											<div class="main__table-text main__table-text--rate">
												<ion-icon name="star-outline"></ion-icon>&nbsp;
												<?php echo $film["rating"]; ?>
											</div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $film["genre"]; ?></div>
										</td>
										<td>
											<div class="main__table-text">
												<?php echo custom_number_format($film["views"]); ?></div>
										</td>
										<td>
											<div class="main__table-text main__table-text--<?php echo $film["C"]; ?>">
												<?php echo $film["M"]; ?></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo(format_date($film["date"])); ?>
											</div>
										</td>
										<td>
											<div
												class="main__table-text main__table-text--<?php echo $film["Rcolor"]; ?>">
												<?php echo $film["R"]; ?></div>
										</td>
										<td>
											<div class="main__table-btns">
												<input type='submit' name='but1' class="form-input"
													value="Опубликовать">
												<input type='submit' name='but4' class="form-input" value="OpenR">
												<input type='submit' name='but5' class="form-input" value="CloseR">
												<input type='submit' name='but3' class="form-input" value="Скрыть">
												<input type='submit' name='but2' class="form-input" value="Удалить">

											</div>
										</td>
									</tr>
								</tbody>
							</form> <?php } ?>
						</table>
					</div>
				</div>
				<!-- paginator -->
				<div class="col-12">
					<div class="paginator-wrap">
						<ul class="paginator">
							<li class="paginator__item"><a href="?page=1">1</a></li>
							<li class="paginator__item"><a href="?page=2">2</a></li>
							<li class="paginator__item"><a href="?page=3">3</a></li>
							<li class="paginator__item"><a href="?page=4">4</a></li>
							<li class="paginator__item"><a href="?page=5">5</a></li>
						</ul>
					</div>
				</div>
				<!-- end paginator -->
			</div>

		</div>
	</main>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="jsadmin/jquery-3.5.1.min.js"></script>
	<script src="jsadmin/bootstrap.bundle.min.js"></script>
	<script src="jsadmin/jquery.magnific-popup.min.js"></script>
	<script src="jsadmin/jquery.mousewheel.min.js"></script>
	<!-- <script src="jsadmin/jquery.mCustomScrollbar.min.js"></script> -->
	<script src="jsadmin/select2.min.js"></script>
	<script src="jsadmin/admin.js?v=16"></script>
</body>

</html>


<?php } ?>