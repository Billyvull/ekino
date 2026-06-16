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
    <title itemprop="headline"><?= $tip ?> <?= $htitle ?> смотреть онлайн <?php echo $single["ads"]; ?> 🎬 eKino</title>
    <meta itemprop="description" name="description" content="<?= !empty($hdescription) ? $hdescription : $htitle ?>">
    <meta itemprop="keywords" name="keywords" content="<?= $tip ?> <?= $title ?> Без Рекламы, смотреть онлайн, <?= $tip ?> <?= $title ?> смотреть онлайн <?php echo $single["ads"]; ?>, бесплатно в хорошем качестве">
        <!--------------------------------------------------------------------------------------->   
            <meta property="og:title" content="<?= $tip ?> <?= $htitle ?> смотреть онлайн <?php echo $single["ads"]; ?> 🎬 eKino" />
            <meta property="og:type" content="article">
            <meta property="og:url" content="https://ekino.me/<?= $url ?>" />
            <meta property="og:image" content="https://ekino.me/<?= $img ?>" />
            <meta property="og:description" content="<?= !empty($hdescription) ? $hdescription : $htitle ?>" />
         <!--------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/style.css?v=<?php echo get_version(); ?>">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="shortcut icon" href="/img/favpuh.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/apple60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple152x152.png">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="canonical" href="https://ekino.me/<?= $url ?>"/>
    <script async src="https://moevideo.biz/embed/js/mvpt.min.js"></script>
<!---------------------------------------------------- Фильмы  ---------------------------------------------------->

<meta name='advmaker-verification' content='a1bf3cee66a35ba5621dfecb0b82429a'/>
<!----------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------- Яндекс-Метрика ---------------------------------------------------->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(103232232, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/103232232" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!------------------------------------------------------------------------------------------------------------------------>
</head>