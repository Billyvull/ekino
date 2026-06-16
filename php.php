<?php
  if(!empty($_POST['passname']))
  {
    $pass = "YOUR_PASSWORD";
      if($_POST['passname']==$pass)
       {
        session_start();
        $_SESSION['access']=true;
        header("Location: stats.php") ;
       }
    else 
    {
       header("Location: index.php") ;
    }
  }
  else
  {
    ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Apanel eKino</title>
  <link rel="stylesheet" href="cssadmin/style.css">
</head>

<body>
  <form method="post" action="" class="login">
    <p>
      <label for="login">Code:</label>
      <input type="text" name="passname">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Войти</button>
    </p>
  </form>
</body>
</html>

<?php
  }
?>