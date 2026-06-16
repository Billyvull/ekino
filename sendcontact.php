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

    $lor1 = $_POST['name']; 
    $lor2 = $_POST['email']; 
    $lor3 = $_POST['message']; 
    $lor4 = date("Y-m-d H:i:s");
    $lor5 = 'red';
    $lor6 = 'Not answered';

    $link->set_charset('utf8');
    $sql = mysqli_query($link, "INSERT INTO `usersmessage` (`id`, `name`, `email`, `textmessage`, `date`, `C`, `M`) VALUES (NULL, '$lor1','$lor2','$lor3', '$lor4', '$lor5', '$lor6')");

      if ($sql) 
      {
        header("Location: contactsuccess.php");
      } 

      else 
      {
        echo "<script>alert('Ошибка');</script>";
      }

    $link->close();
  ?> 
  