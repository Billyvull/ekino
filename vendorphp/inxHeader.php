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
        echo "Ютуб Фильмы Без Рекламы 🎬 eKino";
        if (isset($_GET['page'])) 
        {
            echo " | Топ ".((int) $_GET['page'])*25;
        } 
        ?>
    </title>
    <meta itemprop="keywords" name="keywords" content="Ютуб фильмы без рекламы, фильмы без рекламы, кино без рекламы, ютуб фильмы бесплатно без рекламы, смотреть Ютуб фильмы без рекламы">
    <meta itemprop="description" name="description" content="<?php 
        if(isset($_GET['page'])){ 
            echo 'Смотреть '. ((int) $_GET['page'])*25 .'+ самых недооцененных Ютуб фильмов 2021 без рекламы. Теперь не нужно тратить время на просмотр рекламы перед фильмом. Все фильмы доступны бесплатно и без регистрации!' ;}
        else { 
            echo 'Смотреть 1500+ самых недооцененных Ютуб фильмов 2021 без рекламы. Теперь не нужно тратить время на просмотр рекламы перед фильмом. Все фильмы доступны бесплатно и без регистрации!' ; }?>">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/style.css?v=<?php echo get_version(); ?>">
<!------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/favpuh.ico" type="image/x-icon">
            <!--------------------------------------------------------------------------------------->   
                 <meta property="og:title" content="Ютуб Фильмы Без Рекламы 🎬 eKino" />
                 <meta property="og:type" content="article">
                 <meta property="og:url" content="https://ekino.me/" />
                 <meta property="og:image" content="https://ekino.me/img/BSSN.png" />
            <!--------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------>   
    <link rel="apple-touch-icon" href="/img/apple60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple152x152.png">
<!------------------------------------------------------------------------------------------------------------------------>
    <script async src="https://moevideo.biz/embed/js/mvpt.min.js"></script>
 
<!------------------------------------------------------------------------------------------------------------------------>
<meta name='advmaker-verification' content='a1bf3cee66a35ba5621dfecb0b82429a'/>

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
