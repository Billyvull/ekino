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


    function translit_sef($value)
{
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
	);
 
	$value = mb_strtolower($value);
	$value = strtr($value, $converter);
	$value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
	$value = mb_ereg_replace('[-]+', '-', $value);
	$value = trim($value, '-');	
 
	return $value;
}
 
// echo translit_sef();
// $date = "2014-06-25";
// echo date("d.m.Y", strtotime($date));

    $idfilmer = $_POST['idfilm'];
    // ID Фильма
    $namefilm = $_POST['namefilm'];
    // Название фильма
    $ufilm = translit_sef($_POST['urlfilm']);
    // URL страницы
    $tpage = $_POST['textpage']; 
    // Description страницы
    // $kpage = $_POST['keypage']; // Keywords страницы
    $gfilm = $_POST['genre'];
    // Жанры
    $dpublic = $_POST['datepublic']; 
    // Дата публикации
    $tfilm = $_POST['timefilm']; 
    // Время фильма
    $ratingfilm = $_POST['ratingfilm']; 
    // Рейтинг фильма
    $voicefilm = $_POST['voiceoverfilm'];
    // Озвучка
    $qfilm = $_POST['qualityfilm'];
    // Качество фильма
    $tfilminutes = $_POST['timefilmminutes'];
    // Время в минутах
    $engfilm = $_POST['engnamefilm']; 
    // English название фильма
    $tfilmone = $_POST['textfilmone']; 
    // Описание номер один
    $tfilmtwo = $_POST['textfilmdwo']; 
    // Описание номер два
    $tfiltree = $_POST['textfilmtree']; 
    // Описание номер три
    $realfilmy = $_POST['releaseyearfilm'];
    // Год выхода фильма
    $datreafilm = date("d.m.Y", strtotime($_POST['datereleasefilm'])); 
    // Дата выхода фильма
    $cfilm = $_POST['countryfilm'];
    // Страна съёмок
    $afilm = $_POST['agefilm']; 
    // Возрастное ограничение
    $pfilm = $_POST['pricefilm']; 
    // Стоимость просмотра
    $dirfilm = $_POST['directorfilm']; 
    // Режисёр фильма
    $actsfilm = $_POST['actorsfilm']; 
    // Актеры фильма
    $viewfilm = $_POST['viewsfilm']; 
    // Просмотров
    $colorrating = $_POST['colorratingfilm']; 
    // Цвет рейтинга
    $statfilm = 'visible'; 
    // Статус: Виден
    $vcolor = 'green';
    $rstatus = 'Закрытая';
    $redactcolor = 'green';
    $tpfilm = $_POST['tipf'];
    $relk = $_POST['relk']; // Пометка рекламы
    $uposter = 'img/films/'. time() . $_FILES['urlposter']['name'];
    move_uploaded_file($_FILES['urlposter']['tmp_name'], $uposter);
        ////////////////////////////////////////////////////////////
        $apfilm = $_POST['adsapi']; 
        // Ссылка на фильм "Другой ресурс"
        $apiyoutube = $_POST['apifilm']; 
        // Ссылка на фильм "YouTube"
        $inputads = $_POST['inputads']; 
        // Флажок "Реклама"
        $ads = $_POST['ads']; 
        // Текст "Без рекламы/С рекламой"
        ////////////////////////////////////////////////////////////

    $link->set_charset('utf8');
    $sql = mysqli_query($link, "INSERT INTO `singles` (`id`, `apinew`, `iframevideo`, `checkads`, `ads`, `title`, `url`, `hdescription`, `genre`, `img`, `date`, `ltime`, `rating`, `altkey`, `voiceover`, `quality`, `length`, `engname`, `d1`, `d2`, `d3`, `releaseyear`, `releasedate`, `country`, `age`, `price`, `director`, `actors`, `views`, `htitle`, `ricon`, `M`, `C`, `R`, `Rcolor`, `tip`, `relk`) VALUES (NULL, '$apfilm', '$apiyoutube', '$inputads', '$ads', '$namefilm','$ufilm','$tpage','$gfilm','$uposter','$dpublic','$tfilm','$ratingfilm','$namefilm','$voicefilm','$qfilm','$tfilminutes','$engfilm','$tfilmone','$tfilmtwo','$tfiltree','$realfilmy','$datreafilm','$cfilm','$afilm','$pfilm','$dirfilm','$actsfilm','$viewfilm','$namefilm', '$colorrating', '$statfilm', '$vcolor', '$rstatus', '$redactcolor', '$tpfilm', '$relk')");

      if ($sql) 
      {
        header("Location: apanel.php");
      } 

      else 
      {
        echo "<script>alert('FAILED TO INSERT');</script>";
      }

    $link->close();
  ?> 
  