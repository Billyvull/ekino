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

    if(isset($_POST['but1']))
    { 
        $staid = $_POST['idmessage'];
        $vstatus = 'green';
        $vcolor = 'Закрытый вопрос';
    
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "UPDATE videoerror SET C=('$vstatus'), M='$vcolor' WHERE id='$staid'");
    
          if ($sql) 
          {
            header("Location: https://ekino.me/videoerror.php");
          } 
    
          else 
          {
            echo "<script>alert('FAILED');</script>";
          }
    }
    if(isset($_POST['but2']))
    { 
        $staid = $_POST['idmessage'];
        $vstatus = 'green';
        $vcolor = 'Закрытый вопрос';
    
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "DELETE FROM videoerror");
    
          if ($sql) 
          {
            header("Location: https://ekino.me/videoerror.php");
          } 
    
          else 
          {
            echo "<script>alert('FAILED');</script>";
          }
    }
  ?> 
  