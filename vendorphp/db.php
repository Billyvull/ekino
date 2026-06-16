<?php
session_start();

$dbhost = "YOUR_DATABASE_USER"; 
$dbname = "YOUR_DATABASE_USER";
$username = "YOUR_DATABASE_USER";
$password = "test123";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('SET CHARACTER SET utf8');

//------------------------------------------ ВЫВОД ФИЛЬМОВ НА ГЛАВНУЮ СТРАНИЦУ eKino.me -----------------------------------
function get_singles_all()
{   
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $singles = $db->query("SELECT * FROM singles WHERE id > 0 AND M='visible' AND tip='Фильм' AND ads='Без рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------

function select_genre()
{   
    global $db;
    $singles = $db->query("SELECT * FROM genres");
    return $singles;
}

function ycounter()
{   
    global $db;
    $singles = $db->query("SELECT * FROM yandex_counter");
    return $singles;
}


//------------------------------------------------------------------------------------------------------------------------
function get_sinsimilar_all()
{   
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else { $page = 1;}
    $notesOnPage = 10; 
    $from = ($page - 1) * $notesOnPage;
    $singles = $db->query("SELECT * FROM singles WHERE id > 0 AND M='visible' ORDER BY id DESC LIMIT $from,$notesOnPage");
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//-------------------------------- КОЛИЧЕСТВО ФИЛЬМОВ ПО ЖАНРУ НА ГЛАВНУЮ СТРАНИЦУ ---------------------------------------
function boeviki()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Боевик%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function drama()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Драма%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function detektiv()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Детектив%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function komediya()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Комедия%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function kriminal()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Криминал%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function melodrama()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Мелодрама%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function multfilm()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Мультфильм%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function realfilm()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%На реальных событиях%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function adventure()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Приключения%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function triller()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Триллер%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function horror()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Ужасы%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}

function fantastik()
{
    global $db;
    $singles = $db->query("SELECT id FROM singles WHERE genre LIKE '%Фантастика%' AND ads='Без Рекламы'"); 
    return $singles->rowCount();
}
//------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------- URL И ID СТРАНИЦЕ ---------------------------------------------
function get_singles_by_id($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM singles WHERE id = $id");

    foreach ($singles as $single) {
        return $single;
    }
}
function get_singles_by_url($url)
{
    global $db;
    $singles = $db->query("SELECT * FROM singles WHERE url = '$url'");
    foreach ($singles as $single) {
        return $single;
    }
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------ ПОИСК -----------------------------------------------------
function get_search($question)
{
    global $db;
    $str = mb_substr($question, 0, -1, "UTF-8");
    $singles = $db->query("SELECT * FROM singles WHERE title LIKE '%$str%'");
    $singlesArray = [];
    foreach ($singles as $single) {$singlesArray[] = $single;}
    return $singlesArray; 
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ПРОСМОТРЫ: СЧЁТЧИК -----------------------------------------------
function views_update($id)
{
    global $db;
    if(!$id) return ;
    $db->query("UPDATE singles SET views = views + 1 WHERE id = $id");
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ПАГИНАЦИЯ (ГЛАВНАЯ СТРАНИЦА) -------------------------------------
function get_pag_all()
{
    global $db;
    $singles = $db->query("SELECT * FROM pagination");
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- РЕКЛАМА (ВСЕ СТРАНИЦЫ) -------------------------------------------
function adv()
{
    global $db;
    $singles = $db->query("SELECT * FROM adv");
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------- ПАГИНАЦИЯ (ЖАНРЫ) ------------------------------------------
function category_pagination()
{
    global $db;
    $singles = $db->query("SELECT * FROM category_pagination");
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ПАГИНАЦИЯ (editfilm.php) -----------------------------------------
function get_films_all()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 100; 
    $from = ($page - 1) * $notesOnPage;
    $f1 = $db->query("SELECT * FROM singles ORDER BY id DESC LIMIT $from,$notesOnPage");
    return $f1;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ПАГИНАЦИЯ (message.php) ------------------------------------------
function messages()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 11; 
    $from = ($page - 1) * $notesOnPage;
    $f1 = $db->query("SELECT * FROM usersmessage ORDER BY id DESC LIMIT $from,$notesOnPage");
    return $f1;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ДОБАВЛЕНИЕ АРТИКЛЯ К ПРОСМОТРАМ ----------------------------------
function custom_number_format($n, $precision = 1) {
    if ($n < 900){$n_format = number_format($n);} 
    else if ($n < 900000) {$n_format = number_format($n / 1000, $precision). 'K';} 
    else if ($n < 900000000) {$n_format = number_format($n / 1000000, $precision). 'M'; } 
    else if ($n < 900000000000) {$n_format = number_format($n / 1000000000, $precision). 'B';} 
    else {$n_format = number_format($n / 1000000000000, $precision). 'T';}
    return $n_format;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ПРИОБРАЖЕНИЕ ДАТЫ В СЕГОДНЯ/ВЧЕРА --------------------------------
function format_date($date)
{
    date_default_timezone_set('Europe/Moscow');
    $today = date("Y-m-d");
    $todaySeconds = strtotime($today); 
    $dateSeconds = strtotime($date);
    $dateDiff = $todaySeconds - $dateSeconds;
    if ($dateDiff < 86400){return 'Сегодня';}
    else if ($dateDiff < 172800){return 'Вчера';}
    else
    {
        $daysAgo = floor($dateDiff / 86400);
        if(($daysAgo >= 2 && $daysAgo <= 4) || ($daysAgo >= 101 && $daysAgo <= 104) || ($daysAgo >= 201 && $daysAgo <= 204) || ($daysAgo >= 301 && $daysAgo <= 304)){return "$daysAgo дня назад";}
        else if ($daysAgo >= 5) {return "$daysAgo дней назад";}
    }
}
//------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------- [НАЧАЛО ВЫБОРА ЖАНРА] -----------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: БОЕВИК ------------------------------------------------
function Боевик()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Боевик%' AND M='visible' AND ads='Без Рекламы' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['Боевик']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: КРИМИНАЛ --------------------------------------------

function Криминал()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Криминал%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Криминал']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: ДЕТЕКТИВ --------------------------------------------
function Детектив()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Детектив%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Детектив']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: МУЛЬТФИЛЬМ ------------------------------------------
function Мультфильм()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Мультфильм%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Мультфильм']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: ДРАМА -----------------------------------------------
function Драма()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Драма%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['Драма']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: КОМЕДИЯ ---------------------------------------------
function Комедия()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Комедия%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Комедия']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: МЕЛОДРАМА -------------------------------------------
function Мелодрама()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Мелодрама%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Мелодрама']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: ПРИКЛЮЧЕНИЯ -----------------------------------------
function Приключения()
{ 
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Приключения%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['Приключения']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: ТРИЛЛЕР ---------------------------------------------
function Триллер()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Триллер%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['Триллер']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: УЖАСЫ -----------------------------------------------
function Ужасы()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Ужасы%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['Ужасы']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ВЫБРАН ЖАНР: ФАНТАСТИКА ------------------------------------------
function Фантастика()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%Фантастика%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Фантастика']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ ВЫБРАН ЖАНР: НА РЕАЛЬНЫХ СОБЫТИЯХ -------------------------------------
function На_реальных_событиях()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE genre  like '%На реальных событиях%' AND M='visible' AND ads='Без Рекламы' ORDER BY id DESC LIMIT $from,$notesOnPage"); 
    $sth->execute(['На реальных событиях']);
    return $sth;
}
//----------------------------------------------------- ВЫБРАН ЖАНР: ФАНТАСТИКА ------------------------------------------
function Актуальные()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $sth = $db->prepare("SELECT * FROM singles WHERE M='visible' AND relk='y' AND tip='Фильм' ORDER BY id DESC LIMIT $from,$notesOnPage");
    $sth->execute(['Фантастика']);
    return $sth;
}
//------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------- [КОНЕЦ ВЫБОРА ЖАНРА] ----------------------------------------------
//------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------- СОРТИРОВКА: ПО РЕЙТИНГУ --------------------------------------------
function sort_index_popular()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $singles = $db->query("SELECT * FROM singles WHERE id > 0 AND M='visible' AND tip='Фильм' AND ads='Без рекламы' ORDER BY rating DESC LIMIT $from,$notesOnPage"); 
    return $singles;
}
//------------------------------------------------------ СОРТИРОВКА: СТАРЫЕ -----------------------------------------------
function sort_index_old() 
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 25;
    $from = ($page - 1) * $notesOnPage;
    $singles = $db->query("SELECT * FROM singles WHERE id > 0 AND M='visible' AND tip='Фильм' AND ads='Без рекламы' ORDER BY date ASC LIMIT $from,$notesOnPage"); 
    return $singles;

}
//------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------- [APANEL]: ПРИБАВЛЯТЬ +1 К ID --------------------------------------------
function get_valpo_all()
{
    global $db;
    $singles = $db->query("SELECT MAX(id) + 1 FROM singles"); 
    return $singles->fetchColumn();
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [EDITFILM]: ИТОГО ФИЛЬМОВ ---------------------------------------------
function get_reslt_all()
{
    global $db;
    $singles = $db->query("SELECT MAX(id) FROM singles"); 
    return $singles->fetchColumn();
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [EDITFILM]: РЕДАКТАЦИЯ ------------------------------------------------
function pageeditone(){
    global $db;
    $singles = $db->query("SELECT * FROM singles WHERE R='Открытая'"); 
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [MESSAGE]: ИТОГО СООБЩЕНИЙ --------------------------------------------
function maxmessage()
{
    global $db;
    $singles = $db->query("SELECT MAX(id) FROM usersmessage"); 
    return $singles->fetchColumn();
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [ПРОБЛЕМЫ ВИДЕО] ------------------------------------------------------
function errorvideo()
{
    global $db;
    $singles = $db->query("SELECT * FROM videoerror ORDER BY id DESC"); 
    return $singles;
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [ОБНОВИТЬ ВЕРСИИ] -----------------------------------------------------
function get_version()
{
    global $db;
    $singles = $db->query("SELECT MAX(id) FROM versions"); 
    return $singles->fetchColumn(); 
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------ [СЛУЧАЙНЫЙ ФИЛЬМ] -----------------------------------------------------
function randfilm()
{
    global $db;
    $singles = $db->query("SELECT url FROM singles ORDER BY RAND() LIMIT 0,1"); 
    return $singles->fetchColumn(); 
}
//------------------------------------------------------------------------------------------------------------------------
//------------------------------------------ [APANEL]: МАКСИМУМ ПРОСМОТРОВ -----------------------------------------------
function statsone()
{
    global $db;
    $f1 = $db->query("SELECT SUM(views) FROM singles"); 
    return $f1->fetchColumn(); 
}
//------------------------------------------ [APANEL]: МАКСИМУМ ФИЛЬМОВ  -------------------------------------------------
function statstwo()
{
    global $db;
    $f1 = $db->query("SELECT MAX(id) FROM singles"); 
    return $f1->fetchColumn(); 
}
//--------------------------------------- [APANEL]: КОЛ-ВО ОТКРЫТЫХ ССЫЛОК  -----------------------------------------------
function statstree()
{
    global $db;
    $f1 = $db->query("SELECT count(uri) FROM visits WHERE date=CURDATE()"); 
    return $f1->fetchColumn(); 
}
//------------------------------------------ [APANEL]: ПОСЛЕДНЕЕ ДОБАВЛЕНИЕ -----------------------------------------------
function statsfo()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 5; 
    $from = ($page - 1) * $notesOnPage;
    $f1 = $db->query("SELECT * FROM singles ORDER BY id DESC LIMIT $from,$notesOnPage");
    return $f1;
}
//------------------------------------------ [APANEL]: ТОП ПРОСМОТРОВ ------------------------------------------------------
function statsfive()
{
    global $db;
    if (isset($_GET['page'])) {$page = $_GET['page'];} else {$page = 1;}
    $notesOnPage = 5; 
    $from = ($page - 1) * $notesOnPage;
    $f1 = $db->query("SELECT * FROM singles ORDER BY views DESC LIMIT $from,$notesOnPage");
    return $f1;
}
//--------------------------------------- [APANEL]: ПОСЛЕДНИЕ ПОЛЬЗОВАТЕЛИ --------------------------------------------------
function statssix()
{
    global $db;
    $f1 = $db->query("SELECT * FROM visits ORDER BY id DESC LIMIT 5");
    return $f1;
}
//------------------------------------------- [APANEL]: ПРОБЛЕМЫ ВИДЕО ------------------------------------------------------
function statsseven() //// Проблемы видео
{
    global $db;
    $f1 = $db->query("SELECT * FROM videoerror ORDER BY id DESC LIMIT 5");
    return $f1;
}
//------------------------------------------- [APANEL]: МАКСИМУМ ФИЛЬМОВ  ----------------------------------------------------
function existsurl()  //// Максимум фильмов
{
    global $db;
    $url = $_SERVER['REQUEST_URI'];
    $f1 = $db->query("SELECT * FROM singles WHERE url = '$url'"); 
    return $f1->fetchColumn(); 
    
}
//---------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------- ЛОГОТИП -------------------------------------------------------------
function logotype()
{
    global $db;
    $singles = $db->query("SELECT logotype FROM screens"); 
    return $singles->fetchColumn();
}
//---------------------------------------------------------------------------------------------------------------------------

function yvizor()
{
    global $db;
    $singles = $db->query("SELECT webvizor FROM yandex_counter"); 
    return $singles->fetchColumn();
}

function ymetrika()
{
    global $db;
    $singles = $db->query("SELECT metrika FROM yandex_counter"); 
    return $singles->fetchColumn();
}

