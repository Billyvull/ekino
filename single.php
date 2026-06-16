
<?php require 'vendorphp/db.php'; ?>
<!----------------------------------------------------------- url ------------------------------------------------------->
<?php $single = get_singles_by_url($_GET['url']); ?>
<?
	$htitle = $single['htitle'];
	$hdescription = $single['hdescription'];
	$hkeywords = $single['hkeywords'];
	$url = $single['url'];
	$img = $single['img'];
	$tip = $single['tip'];
	$age = $single['releaseyaer'];
	$title = $single['title'];
    if(!$single)
    {
      header("HTTP/1.1 404 Not Found");
      echo file_get_contents('404.html') ;
      die();
    }
?>
<!------------------------------------------------------------------------------------------------------------------------>
<!--------------------------------------------------------- visits ------------------------------------------------------->
<?php
  $userhash = $_COOKIE["userhash"];
    if (!$userhash) 
      {
       $userhash = uniqid();
       setcookie("userhash", $userhash, 0x6FFFFFFF);
      }
  $ip = ip2long($_SERVER["REMOTE_ADDR"]);
  $uri = $_SERVER["REQUEST_URI"];
  $ref = $_SERVER["HTTP_REFERER"];
  $date = date("Y.m.d");
  $mysqli = new mysqli("YOUR_DATABASE_USER", "YOUR_DATABASE_USER", "test123", "YOUR_DATABASE_USER");
  $mysqli->query("INSERT INTO `visits` (`userhash`, `ip`, `uri`, `ref`, `date`) VALUES ('$userhash', '$ip', '$uri', '$ref', '$date')");
  $mysqli->close();

?>
<!------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- require: header ---------------------------------------------------->
<?php require 'vendorphp/sinHeader.php'; ?>
<!------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- require: content --------------------------------------------------->
<?php require 'vendorphp/sinContent.php'; ?>
<!------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- require: footer ---------------------------------------------------->
<?php require 'vendorphp/sinFooter.php'; ?>
<!------------------------------------------------------------------------------------------------------------------------->