<?php 
	session_start();
	require 'vendorphp/db.php';
	if(!isset($_SESSION['access']) || $_SESSION['access']!=true)
	{
	   header("location:index.php");
	}
	else
	{ 
?>
 
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
	<link rel="stylesheet" href="cssadmin/admin.css">
	<link rel="icon" type="image/png" href="iconadmin/favicon.ico" sizes="32x32">
	<link rel="apple-touch-icon" href="iconadmin/favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="nofollow"/>
	<title>Добавление фильма - eKino</title>

</head>

<body>
	<header class="header">
		<div class="header__content">
			<a href="index.php" class="header__logo">
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
					<a href="https://ekino.me/stats.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="pie-chart-outline"></ion-icon></ion-icon>&nbsp;&nbsp;Статистика</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/apanel.php" class="sidebar__nav-link sidebar__nav-link--active"><ion-icon name="duplicate-outline"></ion-icon>&nbsp;&nbsp;Добавить фильм</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link"><ion-icon name="create-outline"></ion-icon>&nbsp;&nbsp;Редактирование</a>
				</li>
				<li class="sidebar__nav-item">
					<!-- <a href="https://ekino.me/message.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения</a> -->
					<a href="https://forms.yandex.ru/admin/myforms" class="sidebar__nav-link sidebar__nav-link" target="_blank"><ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения</a>
				</li>
				<li class="sidebar__nav-item">
					<a href="https://ekino.me/videoerror.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="alert-circle-outline"></ion-icon>&nbsp;&nbsp;Проблемы</a>
				</li>
				<li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="documents-outline"></ion-icon>&nbsp;&nbsp;Страницы</a>

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
			<div class="sidebar__copyright">© 2021 eKino. <br>Create by <a href="https://vk.com/billyvull"
					target="_blank">Billyvull</a></div>
		</div>

		<ul class="sidebar__nav">
		    <li class="sidebar__nav-item">
				<a href="https://ekino.me/stats.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="pie-chart-outline"></ion-icon></ion-icon>&nbsp;&nbsp;Статистика</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/apanel.php" class="sidebar__nav-link sidebar__nav-link--active"><ion-icon name="duplicate-outline"></ion-icon>&nbsp;&nbsp;Добавить фильм</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/editfilm.php" class="sidebar__nav-link sidebar__nav-link" target="_blank"><ion-icon name="create-outline"></ion-icon>&nbsp;&nbsp;Редактирование</a>
			</li>
			<li class="sidebar__nav-item">
				<a href="https://ekino.me/message.php" class="sidebar__nav-link sidebar__nav-link" target="_blank"><ion-icon name="mail-outline"></ion-icon>&nbsp;&nbsp;Сообщения</a>
			</li>
			<li class="sidebar__nav-item">
					<a href="https://ekino.me/videoerror.php" class="sidebar__nav-link sidebar__nav-link"><ion-icon name="alert-circle-outline"></ion-icon>&nbsp;&nbsp;Проблемы</a>
			</li>
		</ul>
		<div class="sidebar__copyright">© 2021 eKino. <br>Create by <a href="https://vk.com/itpviga"
				target="_blank">Billyvull</a></div>
	</div>


	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="main__title">
						<h2>Добавление кинопремьеры</h2>
					</div>
				</div>

				<!-- form -->
				<div class="col-12">
					<form action="morers" class="form" method="post" enctype="multipart/form-data" id="quiz-forms">  
						<div class="row">
						
							<div class="col-12 col-md-5 form__cover">
								<div class="row">
									<div class="col-12 col-sm-6 col-md-12">
										<div class="form__img">
											<label for="form__img-upload">Изображение (300 x 560)</label>
											<input id="form__img-upload" name="urlposter" require type="file"
												accept=".png, .jpg, .jpeg">
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row">

									<div class="col-12">
										<input type="hidden" class="form__input" name="idfilm" id="lastid"
										require placeholder="ID: !--Прибавить единицу последнему ID--! (Важно)" value="<?php echo get_valpo_all(); ?>">
									</div>

									<div class="col-12">
										<input type="text" class="form__input quiz-form" name="namefilm" require placeholder="Название фильма" >
									</div>

									<div class="col-12">
									    <input type="hidden" name="urlfilm" class="form__input" id="SendInput" value="" />
									</div>

									<!-- <div class="col-12">
										<input id="url" type="text" class="form__input" name="urlfilm"  placeholder="URL страницы" >
									</div> -->

									<div class="col-12 col-lg-6">
										<select class="js-example-basic-multiple" id="genre" multiple="multiple" onchange="fn(this)">
										    <option value=""></option>
											<option value="Боевик">&nbsp;Боевик</option>
											<option value="Драма ">&nbsp;Драма</option>
											<option value="Детектив ">&nbsp;Детектив</option>
											<option value="Комедия ">&nbsp;Комедия</option>
											<option value="Криминал ">&nbsp;Криминал</option>
											<option value="Мелодрама ">&nbsp;Мелодрама</option>
											<option value="Мультфильм ">&nbsp;Мультфильм</option>
											<option value="На реальных событиях ">&nbsp;На реальных событиях</option>
											<option value="Приключения ">&nbsp;Приключения</option>
											<option value="Триллер ">&nbsp;Триллер</option>
											<option value="Ужасы ">&nbsp;Ужасы</option>
											<option value="Фантастика ">&nbsp;Фантастика</option>
										</select>
									</div>

									<div class="col-12">
										<input id="tpf" type="text" class="form__input" name="tipf"  placeholder="Тип элемента (Фильм/Мультфильм)" >
									</div>

									<div class="col-12">
										<input id="ads" type="text" class="form__input" name="ads"  placeholder="Без рекламы/(Оставить пустым если есть реклама!)" >
									</div>

									<div class="col-12">
										<input id="adsapi" type="text" class="form__input" name="adsapi"  placeholder="API ссылка на видеозапись" >
									</div>

									<div class="col-12">
										<textarea id="hdescription" class="form__textarea" name="textpage"
											placeholder="Описание страницы (Соблюдать пробелы и знаки!)"></textarea>
									</div>

									<!-- <div class="col-12">
										<textarea id="hkeywords" class="form__textarea" name="keypage"
											placeholder="Ключевые слова"></textarea>
									</div> -->

									<div class="col-12">
										<input type="date" id="datepub" class="form__input" name="datepublic"
										require placeholder="Дата публикации">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="lenfilm" class="form__input" name="timefilm"
										require placeholder="Время фильма (00:00:00)" >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="ratingfilm" require placeholder="Рейтинг"
										 >
									</div>


									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="apifilm" require placeholder="API фильма Ютуб">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<select class="js-example-basic-single" id="rating" onchange="fntwo(this)">
											<option value=""></option>
											<option value="high">high</option> 
											<option value="middle">middle</option>
											<option value="low">low</option>
										</select>
									</div>	

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="voiceover" class="form__input" name="voiceoverfilm"
											placeholder="Озвучка (По умолчанию Русская)">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="qualityfilm" id="qualityf"
										require placeholder="Качество (720/1080/4k)" >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="timefilmminutes"
										require placeholder="Время фильма в минутах (XXX)">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="engnamefilm"
										require placeholder="Название фильма Латынь">
									</div>

							<script>
							function fn(sel)
							{ 
							var a = [], i = 0, b;
							for (; b = sel.options[i++];)  
							{if(b.selected) a.push(b.text)};
							a[0] = a[0].trim();
							document.getElementById('rez').value = a;
						    }
						    </script>

									<input id="rez" val="" name="genre" type="hidden" />


									<div class="col-12">
										<textarea id="text" class="form__textarea" name="textfilmone"
										require placeholder="Описание фильма 1 строка" ></textarea>
									</div>

									<div class="col-12">
										<textarea id="text" class="form__textarea" name="textfilmdwo"
											placeholder="Описание фильма 2 строка"></textarea>
									</div>

									<div class="col-12">
										<textarea id="text" class="form__textarea" name="textfilmtree"
											placeholder="Описание фильма 3 строка"></textarea>
									</div>

									<div class="col-12">
										<input type="text" class="form__input" name="actorsfilm" require placeholder="Актеры"
										 >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="releaseyearfilm"
										require placeholder="Год выхода фильма" >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="datereleasefilm"
										require placeholder="Дата выхода фильма">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="countryfilm" require placeholder="Страна"
										 >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="agefilm" id="agef"
										require placeholder="Возраст (12+/16+/18+)" >
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="prfilm" class="form__input" name="pricefilm"
											placeholder="Стоимость (По умолчанию Бесплатно)">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="directorfilm"
										require placeholder="Режиссёр" >
									</div>
	
									<script>
							        function fntwo(sel)
							        { 
							        var a = [], i = 0, b;
							        for (; b = sel.options[i++];)  
							        {if(b.selected) a.push(b.text)};
							        a[0] = a[0].trim();
							        document.getElementById('colorratingfilm').value = a;
						            }
						             </script>
									<input id="colorratingfilm" val="" name="colorratingfilm" type="hidden" />

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="viewfil" class="form__input" name="viewsfilm"
											placeholder="Просмотров (0 по умолчанию)">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="inputads" class="form__input" name="inputads" placeholder="Значок рекламы">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" id="relk" class="form__input" name="relk" placeholder="Пометка рекламы (y - если есть)">
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="col-12">
									<button type="submit" class="form__btn">Публиковать</button>
								</div>
							</div>
						</div>
				</div>
				</form>
			</div>
			<!-- end form -->
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
	<script src="jsadmin/admin.js?v=15"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			document.getElementById('hdescription').value = 'Фильм ХХХХ смотреть онлайн Без Рекламы'
			document.getElementById('lenfilm').value = '01:00:00'
			document.getElementById('voiceover').value = 'Русская'
			document.getElementById('prfilm').value = 'Бесплатно'
			document.getElementById('viewfil').value = '0'
			document.getElementById('inputads').value = '<span class="material-icons" style="color: Crimson;" title="Присутствует реклама">monetization_on</span>'
			document.getElementById('datepub').valueAsDate = new Date();
			document.getElementById('qualityf').value = 'Full HD 1080'
			document.getElementById('agef').value = '16+'
			document.getElementById('tpf').value = 'Фильм'
			document.getElementById('ads').value = 'Без рекламы'
			document.getElementById('adsapi').value = 'https://www.youtube.com/embed/'
			document.getElementById('relk').value = 'y'
		});
	</script>
</body>

</html>
 
 
<?php } ?>