<?php
    $host = 'YOUR_DATABASE_USER';
    $user = 'YOUR_DATABASE_USER';
    $pass = 'test123';
    $db_name = 'YOUR_DATABASE_USER';
    $editnumberpdage = $_POST['id'];

    
    $link = mysqli_connect($host, $user, $pass, $db_name);
    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }


    if(isset($_POST['but3'])){ // Невиден статус
    $staid = $_POST['id'];
    $vstatus = 'novisible';
    $vcolor = 'red';


    $link->set_charset('utf8');
    $sql = mysqli_query($link, "UPDATE singles SET M=('$vstatus'), C='$vcolor' WHERE id='$staid'");

      if ($sql) 
      {
        header("Location: https://ekino.me/editfilm.php");
      } 

      else 
      {
        echo "<script>alert('FAILED');</script>";
      }
    }
    if(isset($_POST['but2'])){  // Удаление строки
    $staid = $_POST['id'];
    
    $link->set_charset('utf8');
    $sql = mysqli_query($link, "DELETE FROM singles WHERE id='$staid'");

      if ($sql) 
      {
        header("Location: https://ekino.me/editfilm.php");
      } 

      else 
      {
        echo "<script>alert('FAILED');</script>";
      }
    }
    if(isset($_POST['but1']))
       { // Виден статус
        $staid = $_POST['id'];
        $vstatus = 'visible';
        $vcolor = 'green';
    
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "UPDATE singles SET M=('$vstatus'), C='$vcolor' WHERE id='$staid'");
    
          if ($sql) 
          {
            header("Location: https://ekino.me/editfilm.php");
          } 
    
          else 
          {
            echo "<script>alert('FAILED');</script>";
          }
        }
    if(isset($_POST['but4']))
      { 
        $idfilms = $_POST['id'];
        $redact = 'Открытая';
        $redactcolor = 'red';
    
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "UPDATE singles SET R=('$redact'), Rcolor='$redactcolor' WHERE id='$idfilms'");
    
          if ($sql) 
          {
            header("Location: editpage.php");
          } 
    
          else 
          {
            echo "<script>alert('FAILED');</script>";
          }
      }
      if(isset($_POST['but5']))
      { 
        $idfilms = $_POST['id'];
        $redact = 'Закрытая';
        $redactcolor = 'green';
    
        $link->set_charset('utf8');
        $sql = mysqli_query($link, "UPDATE singles SET R=('$redact'), Rcolor='$redactcolor' WHERE id='$idfilms'");
    
          if ($sql) 
          {
            header("Location: editfilm.php");
          } 
    
          else 
          {
            echo "<script>alert('FAILED');</script>";
          }
      }
  ?> 
  