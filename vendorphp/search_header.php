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
    <title itemprop="headline"><?= $htitle ?></title>
    <meta property="og:title" content="Ютуб Фильмы Без Рекламы 🎬 eKino" />
    <meta property="og:url" content="https://ekino.me/" />
    <meta property="og:image" content="https://ekino.me/img/BSSN.png" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" type="text/css" href="../styles/style.css?v=<?php echo get_version(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favpuh.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/apple60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/apple120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/apple152x152.png">
</head>

<body>
    <header id="header">
        <div class="logo__box">
            <a href="https://ekino.me/">
                <img src="<?php echo logotype() ?>" alt="eKino">
            </a>
        </div>
        <div class="search__box">
            <form action="/search" id="SearchFilm">
                <input type="text" id="search-film" name="search" placeholder="Поиск фильма" autocomplete="off" required />
                <button type="submit" id="search-submit">
                    <span class="material-icons">search</span>
                </button>
            </form>
        </div>
        <span></span>
    </header>