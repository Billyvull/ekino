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

    if(isset($_POST['but2']))
    { 
    $idmess = $_POST['idmessage'];
    
    $link->set_charset('utf8');
    $sql = mysqli_query($link, "DELETE FROM usersmessage WHERE id='$idmess'");

      if ($sql) 
      {
        header("Location: https://ekino.me/message.php");
      } 

      else 
      {
        echo "<script>alert('FAILED');</script>";
      }
    }
    if(isset($_POST['but1']))
    { 
        $userid = $_POST['idmessage'];
        $to      = $_POST['usermail'];
        $subject = 'Сообщение от eKino.me';
        $message = 'Спасибо что обратились к нам. В данный момент Ваша заявка рассматривается администраторами сайта https://ekino.me/';
        $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        $vstatus = 'Answered';
        $vcolor = 'green';
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "UPDATE usersmessage SET M=('$vstatus'), C='$vcolor' WHERE id='$userid'");
        header("Location: https://ekino.me/message.php");
    }
  ?> 
  