<!-- Блок: Подключение  -->
<?php require 'vendorphp/db.php'; ?>
<!-- Блок: Подключение  -->

<!-- Блок: Header -->
<?php $singles = get_search($_GET['search']); ?>
<?
	$search_q = $_GET['search'];
	$htitle = "Поиск ".$search_q;
?>

<?php require 'vendorphp/search_header.php'; ?>
<!-- Блок: Header -->

<!-- Блок: -->
<?php require 'vendorphp/inxGnreslide.php'; ?>
<!-- Блок: -->

<!-- Блок: Контент -->
<?php require 'vendorphp/search_content.php'; ?>
<!-- Блок: Контент -->

<!-- Блок: -->
<?php require 'vendorphp/inxFooter.php'; ?>
<!-- Блок: -->