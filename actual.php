<?php require 'vendorphp/db.php'; ?>
<!--------------------------------------------------------- visits ------------------------------------------------------->
<?php
  $userhash = $_COOKIE["userhash"];
    if (!$userhash) 
      {
       $userhash = uniqid();
       setcookie("userhash", $userhash, 0x6FFFFFFF);
      }
  $ip = ip2long($_SERVER["REMOTE_ADDR"]);
  $uri = $_SERVER["REQUEST_URI"];
  $ref = $_SERVER["HTTP_REFERER"];
  $date = date("Y.m.d");
  $mysqli = new mysqli("YOUR_DATABASE_USER", "YOUR_DATABASE_USER", "test123", "YOUR_DATABASE_USER");
  $mysqli->query("INSERT INTO `visits` (`userhash`, `ip`, `uri`, `ref`, `date`) VALUES ('$userhash', '$ip', '$uri', '$ref', '$date')");
  $mysqli->close();

?>
<!------------------------------------------------------------------------------------------------------------------------->
<?php
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: no-referrer");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Frame-Options:sameorigin");
header("X-Permitted-Cross-Domain-Policies: none");
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
header("X-Content-Type-Options: nosniff");
header_remove('x-powered-by');
?>
<!------------------------------------------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html lang="ru">
<head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title itemprop="headline">
        <?php 
        echo "Смотреть фильмы онлайн бесплатно 🎬 eKino";
        if (isset($_GET['page'])) 
        {
            echo " | Топ ".((int) $_GET['page'])*25;
        } 
        ?>
    </title>
    <meta itemprop="keywords" name="keywords" content="фильмы онлайн, смотреть фильмы онлайн бесплано, фильмы онлайн бесплатно, фильмы 2022">
    <meta itemprop="description" name="description" content="<?php 
        if(isset($_GET['page'])){ 
            echo 'Смотреть '. ((int) $_GET['page'])*25 .'+ фильмов онлайн бесплатно. Мы отобрали самые недооцененные фильмы, которые стоит посмотреть всем киноманам. Просмотр полностью бесплатный!' ;}
        else { 
            echo 'Смотреть фильмы онлайн бесплатно. Мы отобрали самые недооцененные фильмы, которые стоит посмотреть всем киноманам. Просмотр полностью бесплатный!' ; }?>">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/style.css?v=<?php echo get_version(); ?>">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favpuh.ico" type="image/x-icon">
            <!--------------------------------------------------------------------------------------->   
                 <meta property="og:title" content="Смотреть фильмы онлайн бесплатно 🎬 eKino" />
                 <meta property="og:type" content="article">
                 <meta property="og:url" content="https://ekino.me/actual" />
                 <meta property="og:image" content="https://ekino.me/img/BSSN.png" />
            <!--------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------>   
    <link rel="apple-touch-icon" href="/img/apple60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple152x152.png">
<!------------------------------------------------------------------------------------------------------------------------>
    <meta name='allsites-biz' content='486c0401c56bf7ec2daa9eba58907da9' />
<!------------------------------------------------------------------------------------------------------------------------>
    <!-- Реклама -->
    <script async src="https://moevideo.biz/embed/js/mvpt.min.js"></script>
    <!--------------->
</head>
<body>
<!---------------------------------------------------------- HEADER ------------------------------------------------------->
    <header id="header">
        <div class="logo__box">
            <a href="https://ekino.me/">
                <img height="50" width="110" loading="lazy" src="<?php echo logotype() ?>" alt="eKino">
            </a>
        </div>
        <div class="search__box">
        <!--------------------------> 
            <form action="/search" id="SearchFilm"> <!----- ПОИСК ----->
                <input type="text" id="search-film" name="search" placeholder="Поиск фильма" autocomplete="off"
                    required />
                <button type="submit" id="search-submit">
                    <span class="material-icons">search</span>
                </button>
            </form>
        <!--------------------------> 
        </div>
        <span></span>
    </header>
    <!---------------------------------------------------------------------------------------------------------------------->
    <main>
    <div class="main__box">
        <div class="main__content">
<!---------------------------------------------------- require: H1 ----------------------------------------------------->
            <h1>
                <?php 
                 if(isset($_GET['page'])){
                 echo 'Смотреть фильмы онлайн бесплатно <sup style="font-size: 16px;color: #ccc;">(Топ '. ((int) $_GET['page'])*25 .')</sup>' ;
                 }
                 else {
                 echo 'Смотреть фильмы онлайн бесплатно' ;
                 }
                ?>
            </h1>
<!---------------------------------------------------------------------------------------------------------------------->
<?php require 'genres.php'; ?>
<!------------------------------------------------------------------------------------------------------------------------>
<div class="films">
    <h2>Смотреть онлайн</h2>
<!------------------------------------------------------------------------------------------------------------------------>
    <!-- <div id="SortFilms" class="sort">
        <span class="sort__toggle">
            <span class="material-icons">sort</span>
            <span class="sort__toggle_caption">УПОРЯДОЧИТЬ</span>
        </span>
        <ul class="sort__films">
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/rating'; return false;">По рейтингу</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" onclick="javascript:window.location.href='https://ekino.me/'; return false;">Сначала новые</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/old'; return false;">Сначала старые</a></li>
        </ul>
    </div> -->
<!------------------------------------------------------------------------------------------------------------------------>
    <ul class="films__list" itemscope itemtype="http://schema.org/ItemList">
        <?php $singles = Актуальные(); foreach ($singles as $single) { ?>
        <li class="films__list_item" data-film="<?php echo $single["id"]; ?>" itemscope itemprop="itemListElement" itemtype="http://schema.org/Movie">
            <a href="/<?php echo $single["url"]; ?>" class="film__box" itemprop="url" >
<!------------------------------------------------------------------------------------------------>
                <div class="film__background">
                <!--- ПРЕВЬЮ --->
                    <img 
                       loading="lazy" 
                       src="<?php echo $single["img"]; ?>" 
                       width="300" 
                       height="450" 
                       class="film__background_image" 
                       itemprop="image" 
                       alt="Фильм <?php echo $single["altkey"]; ?> <?php echo $single["releaseyear"]; ?> <?php echo $single["ads"]; ?>"
                    >
                <!--- PLAY ICON --->
                    <img 
                        loading="lazy" 
                        src="img/play_icon.png" 
                        class="film__background_play" 
                        alt="<?php echo $single["title"]; ?> <?php echo $single["ads"]; ?> смотреть онлайн"
                    >
                <!--- ПРОДОЛЖИТЕЛЬНОСТЬ --->
                    <span 
                        class="film__background_time" 
                        itemprop="duration"><?php echo $single["ltime"]; ?>
                    </span>
                </div>
<!------------------------------------------------------------------------------------------------>
                <!---------------------------->
                <div class="film__content">
                    <h4 class="film__content_name" itemprop="name">
                        <?php echo $single["title"]; ?> <!-- НАЗВАНИЕ ФИЛЬМА -->
                        <?php echo $single["checkads"]; ?> <!-- РЕКЛАМА/БЕЗ РЕКЛАМЫ -->
                    </h4>
                <!---------------------------->
                    <div class="film__primary rate-<?php echo $single["ricon"]; ?>"> <!-- ЦВЕТ РЕЙТИНГА -->
                        <span class="film__content_genre" itemprop="genre"><?php echo $single["genre"]; ?></span> <!-- ЖАНР -->
                        <span class="film__content_rate">
                            <span class="material-icons">thumb_up</span> <!-- ПАЛЕЦ ВВЕРХ-->
                            <?php echo $single["rating"]; ?> <!-- РЕЙТИНГ -->
                        </span>
                    </div>
                <!---------------------------->
                    <div class="film__secondary">
                        <span class="film__content_views"><?php echo custom_number_format($single["views"]); ?> зрителей</span> <!-- ЗРИТЕЛИ -->
                        <span class="film__content_date" itemprop="dateCreated" content="<?php echo $single["date"]; ?>"><?php echo(format_date($single["date"])); ?></span> <!-- ДАТА ПУБЛИКАЦИИ -->
                    </div>
                <!---------------------------->
                </div>
                <meta itemprop="position" content="<?php echo $single["id"]; ?>" />
            </a>
        </li> 
        <?php } ?>
    </ul>
<!------------------------------------------------------------------------------------------------------------------------>
</div>
    <!-- ПАГИНАЦИЯ -->
    <?php $singles = category_pagination(); foreach ($singles as $single) { ?><?php echo $single["actual"]; ?> <?php } ?>
    <!--------------->
            <div class="about">
                <h2>Фильмы онлайн бесплатно</h2>
                <div class="about__description">
                  <p class="about__description_content">
                     Если вы ищете актуальные фильмы, тогда добро пожаловать на eKino!
                     Сайт где собрана наибольшая подборка онлайн фильмов 2022 года.
                     Для просмотра которых не нужно устанавливать блокировщики рекламы
                     или подобные программы удаления рекламных объявлений.
                 </p>
                 <br>
                  <p class="about__description_content">
                      Уже посмотрели все онлайн фильмы и не можете найти хорошее кино?
                      Мы отбираем самые недооцененные фильмы, которые вы захотите посмотреть.
                  </p>
                <h3>В хорошем качестве</h3>
                   <p class="about__description_content">
                       Сейчас на сайте много онлайн фильмов, которые стоит посмотреть каждому.
                       Множество из этих фильмов получают высокую оценку от пользователей.
                       Это помогает развивать сайт и добавлять больше кино без рекламы.
                   </p>
                   <br>
                   <p class="about__description_content">
                       eKino публикует фильмы онлайн только в хорошем качестве: HD 720 и Full HD 1080.
                       Со встроенным и удобным видео-плеером. Благодаря которому
                       мы можем показывать все самые актуальные фильмы, что оставляет
                       хорошее впечатление у зрителей. Потому что больше не нужно искать достойные фильмы часами.
                     </p>
                  <h3>Бесплатно и без регистрации</h3>
                  <p class="about__description_content">
                      Все фильмы на eKino доступны без регистрации и к тому же полностью бесплатные.
                      Теперь все что вам нужно это включить хороший фильм и наслаждаться просмотром в высоком качестве.
                  </p>
                </div> 
            </div>
        </div>
        <!--------------------------> 
            <footer itemscope itemtype="http://schema.org/WPFooter">
                <div class="logo__box">
                    <img height="50" width="110" loading="lazy" src="<?php echo logotype() ?>" alt="eKino логотип">
                </div>
                <div class="copyright">
                     <a href="https://ekino.me/contact" rel="nofollow" target="_blank"> Сообщение администраторам </a>
                </div>
            </footer>
         <!--------------------------> 
        </div>

    <!-- Реклама -->
 
    <!--------------->

    </main>
<!------------------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/main.css?v=<?php echo get_version(); ?>">
    <link href="/fonts/Montserrat.css?v=4" rel="stylesheet" lazyload>
    <link href="/fonts/MontserratIcons.css?v=4" rel="stylesheet" lazyload>
    <script src="/js/jquery.js"></script>
    <script src="/js/swiper.js"></script>
    <!-- <script src="/js/actime.js?v=4"></script> -->
    <script src="/js/interface.js?v=<?php echo get_version(); ?>"></script>
    <script src="/js/get_cookie.js?v=<?php echo get_version(); ?>"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<!---------------------------------------------------- Google-Метрика ---------------------------------------------------->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZ7R55RW3W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-WZ7R55RW3W');
    </script>
<!------------------------------------------------------------------------------------------------------------------------>
<!---------------------------------------------------- Яндекс-Метрика ---------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------>
</body>
</html>