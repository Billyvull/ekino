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

    $urlpage = $_POST['url'];
    $namefilm= $_POST['pagenamefilm'];
    $errorsend= $_POST['textmessage'];
    $datasend = date("Y-m-d");
    $colorsend = 'red';
    

    $link->set_charset('utf8');
    $sql = mysqli_query($link, "INSERT INTO `videoerror` (`id`, `C`, `M`, `name`, `url`, `date`) VALUES (NULL, '$colorsend','$errorsend','$namefilm', '$urlpage', '$datasend')");
    
    if ($sql) 
    {
      header("Location: ".$_SERVER['HTTP_REFERER']);
    } 

    else 
    {
      echo "<script>alert('Ошибка');</script>";
    }
    
  ?> 
  