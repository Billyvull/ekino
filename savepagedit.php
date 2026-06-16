<?php
    $host = 'YOUR_DATABASE_USER';
    $user = 'YOUR_DATABASE_USER';
    $pass = 'test123';
    $db_name = 'YOUR_DATABASE_USER';

   
    $link = mysqli_connect($host, $user, $pass, $db_name);
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    $idfilmer = $_POST['idfilm']; // ID Фильма
    $namefilm = $_POST['namefilm']; // Название фильма
    $ufilm = $_POST['urlfilm']; // URL страницы
    $tpage = $_POST['textpage']; // Description страницы
    $kpage = $_POST['keypage']; // Keywords страницы
    $gfilm = $_POST['genre'];  // Жанры
    $dpublic = $_POST['datepublic']; // Дата публикации
    $tfilm = $_POST['timefilm']; // Время фильма
    $ratingfilm = $_POST['ratingfilm']; // Рейтинг фильма
    $apfilm = $_POST['apifilm']; // Ссылка на фильм
    $voicefilm = $_POST['voiceoverfilm']; // Озвучка
    $qfilm = $_POST['qualityfilm']; // Качество фильма
    $tfilminutes = $_POST['timefilmminutes']; // Время в минутах
    $engfilm = $_POST['engnamefilm']; // English название фильма
    $tfilmone = $_POST['textfilmone']; // Описание номер один
    $tfilmtwo = $_POST['textfilmdwo']; // Описание номер два
    $tfiltree = $_POST['textfilmtree']; // Описание номер три
    $realfilmy = $_POST['releaseyearfilm']; // Год выхода фильма
    $datreafilm = $_POST['datereleasefilm']; // Дата выхода фильма
    $cfilm = $_POST['countryfilm']; // Страна съёмок
    $afilm = $_POST['agefilm']; // Возрастное ограничение
    $pfilm = $_POST['pricefilm']; // Стоимость просмотра
    $dirfilm = $_POST['directorfilm']; // Режисёр фильма
    $actsfilm = $_POST['actorsfilm']; // Актеры фильма
    $viewfilm = $_POST['viewsfilm']; // Просмотров
    $colorrating = $_POST['colorratingfilm']; // Цвет рейтинга
    $statfilm = 'visible'; // Статус: Виден
    $vcolor = 'green';
    $rstatus = 'Закрытая';
    $redactcolor = 'green';
    $uposter = $_POST['urlposter'];
    $tipfilms = $_POST['tpfilm'];


    // $uposter = 'img/films/'. time() . $_FILES['urlposter']['name'];
    // move_uploaded_file($_FILES['urlposter']['tmp_name'], $uposter);

    $link->set_charset('utf8');
    $sql = mysqli_query($link, "UPDATE `singles` SET M='$statfilm', C='$vcolor', R='$rstatus', Rcolor='$redactcolor', title='$namefilm', htitle='$namefilm', url='$ufilm', hdescription='$tpage', hkeywords='$kpage', genre='$gfilm', img='$uposter', date='$dpublic', views='$viewfilm', ricon='$colorrating', rating='$ratingfilm', iframevideo='$apfilm', altkey='$namefilm', d1='$tfilmone', d2='$tfilmtwo', d3='$tfiltree', engname='$engfilm', releaseyear='$realfilmy', voiceover='$voicefilm', quality='$qfilm', length='$tfilminutes', releasedate='$datreafilm', country='$cfilm', age='$afilm', price='$pfilm', director='$dirfilm', actors='$actsfilm', ltime='$tfilm', tip='$tipfilms' WHERE id='$idfilmer'");

      if ($sql) 
      {
        header("Location: editfilm.php ");
      } 

      else 
      {
        echo "<script>alert('FAILED TO INSERT');</script>";
      }

    $link->close();
  ?> 
  