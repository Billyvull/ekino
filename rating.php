<?php require 'vendorphp/db.php'; ?>
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

<!DOCTYPE html>
<html lang="ru">
<head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title itemprop="headline">Ютуб Фильмы Без Рекламы 🎬 eKino</title>
        <!--------------------------------------------------------------------------------------->   
            <meta property="og:title" content="Ютуб Фильмы Без Рекламы 🎬 eKino" />
            <meta property="og:type" content="article">
            <meta property="og:url" content="https://ekino.me/rating" />
            <meta property="og:image" content="https://ekino.me/img/BSSN.png" />
        <!--------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/style.css?v=<?php echo get_version(); ?>">
    <meta name="robots" content="noindex, nofollow">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="shortcut icon" href="/img/favpuh.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/apple60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple152x152.png"> 
    <!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
<!------------------------------------------------------------------------------------------------------------------------>
</head>

<body>
<!---------------------------------------------------------- HEADER ------------------------------------------------------->
    <header id="header">
        <div class="logo__box">
            <a href="https://ekino.me/">
                <img src="<?php echo logotype() ?>" alt="eKino логотип">
            </a>
        </div>
        <div class="search__box">
            <form action="/search" id="SearchFilm">
                <input type="text" id="search-film" name="search" placeholder="Поиск фильма" autocomplete="off" required />
                <button type="submit" id="search-submit"><span class="material-icons">search</span></button>
            </form>
        </div>
        <span></span>
    </header>
<!---------------------------------------------------------------------------------------------------------------------->
    <main>
        <div class="main__box">
            <div class="main__content">
                <h1>Ютуб Фильмы Без Рекламы</h1>
<!---------------------------------------------------------------------------------------------------------------------->
<?php require 'genres.php'; ?>
<!---------------------------------------------------------------------------------------------------------------------->
<div class="films">
    <h2>Смотреть онлайн</h2>
    <div id="SortFilms" class="sort">
        <span class="sort__toggle">
        <span class="material-icons">sort</span>
        <span class="sort__toggle_caption">УПОРЯДОЧИТЬ</span></span>
        <ul class="sort__films">
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/rating.php'; return false;">По рейтингу</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/'; return false;">Сначала новые</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/old.php'; return false;">Сначала старые</a></li>
        </ul>
    </div>
        <ul class="films__list" itemscope itemtype="http://schema.org/ItemList">
        <?php $singles = sort_index_popular(); foreach ($singles as $single) { ?> 
            <li class="films__list_item" itemscope itemprop="itemListElement" data-film="<?php echo $single["id"]; ?>" itemtype="http://schema.org/Movie">
                <a href="/<?php echo $single["url"]; ?>" class="film__box" itemprop="url">
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
            </li> <?php } ?>
        </ul>
</div>
<?php $singles = get_pag_all(); foreach ($singles as $single) { ?><?php echo $single["pgrating"]; ?> <?php } ?>
<?php require 'vendorphp/inxFooter.php'; ?>