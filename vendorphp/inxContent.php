
<body>
    <!---------------------------- реклама -------------------------------->
<!-- <div id='fixedbanner1'>
        <a href='https://alitems.co/g/1e8d11449422fdcbbb1d16525dc3e8/' title='AliExpress'>
          <img alt='fixedbanner1' src='https://tv-ekran.ru/images/250rkl.png'/>
        </a>
    <div class='close-block' onclick="parentNode.remove()"></div>
    </div>

    <div id='fixedbanner2'>
        <a href='https://top-games365.ru/' title='Калибр'>
          <img alt='fixedbanner2' src='https://arizo-kino.ru/img/calib.png'/>
        </a>
    <div class='close-block' onclick="parentNode.remove()"></div>
    </div>
    
    <div id='fixedbanner3'>
        <a href='https://www.booking.com' title='booking'>
          <img alt='fixedbanner3' src='https://arizo-kino.ru/img/booking.png'/>
        </a>
    <div class='close-block' onclick="parentNode.remove()"></div>
    </div>
    
    <div id='fixedbanner4'>
        <a href='https://sbermarket.ru' title='Сбермаркет'>
          <img alt='fixedbanner4' src='https://arizo-kino.ru/img/sbermarket.png'/>
        </a>
    <div class='close-block' onclick="parentNode.remove()"></div>
    </div> -->
<!---------------------------- реклама -------------------------------->
<!---------------------------------------------------------- HEADER ------------------------------------------------------->
    <header id="header">
        <div class="logo__box">
            <a href="https://ekino.me/">
                <img height="50" width="110" loading="lazy" src="<?php echo logotype() ?>" alt="eKino">
            </a>
        </div>
        <div class="search__box">
        <!--------------------------> 
            <form action="/search" id="SearchFilm"> <!----- ПОИСК ----->
                <input type="text" id="search-film" name="search" placeholder="Поиск фильма" autocomplete="off"
                    required />
                <button type="submit" id="search-submit">
                    <span class="material-icons">search</span>
                </button>
            </form>
        <!--------------------------> 
        </div>
        <span></span>
    </header>
    <!---------------------------------------------------------------------------------------------------------------------->
    <main>
    <div class="main__box">
        <div class="main__content">
<!---------------------------------------------------- require: H1 ----------------------------------------------------->
            <h1>
                <?php 
                 if(isset($_GET['page'])){
                 echo 'Ютуб Фильмы Без Рекламы <sup style="font-size: 16px;color: #ccc;">(Топ '. ((int) $_GET['page'])*25 .')</sup>' ;
                 }
                 else {
                 echo 'Ютуб Фильмы Без Рекламы' ;
                 }
                ?>
            </h1>
<!---------------------------------------------------------------------------------------------------------------------->
<?php require 'genres.php'; ?>
<!------------------------------------------------------------------------------------------------------------------------>
<div class="films">
    <h2>Смотреть онлайн</h2>
<!------------------------------------------------------------------------------------------------------------------------>
    <div id="SortFilms" class="sort">
        <span class="sort__toggle">
            <span class="material-icons">sort</span>
            <span class="sort__toggle_caption">УПОРЯДОЧИТЬ</span>
        </span>
        <ul class="sort__films">
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/rating'; return false;">По рейтингу</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" onclick="javascript:window.location.href='https://ekino.me/'; return false;">Сначала новые</a></li>
            <li class="sort__films_item"><a href="javascript:void(0)" rel="nofollow" onclick="javascript:window.location.href='https://ekino.me/old'; return false;">Сначала старые</a></li>
        </ul>
    </div>
<!------------------------------------------------------------------------------------------------------------------------>
    <ul class="films__list" itemscope itemtype="http://schema.org/ItemList">
        <?php $singles = get_singles_all(); foreach ($singles as $single) { ?>
        <li class="films__list_item" data-film="<?php echo $single["id"]; ?>" itemscope itemprop="itemListElement" itemtype="http://schema.org/Movie">
            <a href="/<?php echo $single["url"]; ?>" class="film__box" itemprop="url" >
<!------------------------------------------------------------------------------------------------>
                <div class="film__background">
                <!--- ПРЕВЬЮ --->
                    <img 
                       loading="lazy" 
                       src="<?php echo $single["img"]; ?>" 
                       width="300" 
                       height="450" 
                       class="film__background_image" 
                       itemprop="image" 
                       alt="Фильм <?php echo $single["altkey"]; ?> <?php echo $single["releaseyear"]; ?> <?php echo $single["ads"]; ?>"
                    >
                <!--- PLAY ICON --->
                    <img 
                        loading="lazy" 
                        src="img/play_icon.png" 
                        class="film__background_play" 
                        alt="<?php echo $single["title"]; ?> <?php echo $single["ads"]; ?> смотреть онлайн"
                    >
                <!--- ПРОДОЛЖИТЕЛЬНОСТЬ --->
                    <span 
                        class="film__background_time" 
                        itemprop="duration"><?php echo $single["ltime"]; ?>
                    </span>
                </div>
<!------------------------------------------------------------------------------------------------>
                <!---------------------------->
                <div class="film__content">
                    <h4 class="film__content_name" itemprop="name">
                        <?php echo $single["title"]; ?> <!-- НАЗВАНИЕ ФИЛЬМА -->
                        <?php echo $single["checkads"]; ?> <!-- РЕКЛАМА/БЕЗ РЕКЛАМЫ -->
                    </h4>
                <!---------------------------->
                    <div class="film__primary rate-<?php echo $single["ricon"]; ?>"> <!-- ЦВЕТ РЕЙТИНГА -->
                        <span class="film__content_genre" itemprop="genre"><?php echo $single["genre"]; ?></span> <!-- ЖАНР -->
                        <span class="film__content_rate">
                            <span class="material-icons">thumb_up</span> <!-- ПАЛЕЦ ВВЕРХ-->
                            <?php echo $single["rating"]; ?> <!-- РЕЙТИНГ -->
                        </span>
                    </div>
                <!---------------------------->
                    <div class="film__secondary">
                        <span class="film__content_views"><?php echo custom_number_format($single["views"]); ?> зрителей</span> <!-- ЗРИТЕЛИ -->
                        <span class="film__content_date" itemprop="dateCreated" content="<?php echo $single["date"]; ?>"><?php echo(format_date($single["date"])); ?></span> <!-- ДАТА ПУБЛИКАЦИИ -->
                    </div>
                <!---------------------------->
                </div>
                <meta itemprop="position" content="<?php echo $single["id"]; ?>" />
            </a>
        </li> 
        <?php } ?>
    </ul>
<!------------------------------------------------------------------------------------------------------------------------>
</div>
    <!-- ПАГИНАЦИЯ -->
        <?php $singles = get_pag_all(); foreach ($singles as $single) { ?><?php echo $single["pgscript"]; ?> <?php } ?>
    <!--------------->


<!-- <div class="looking-for"> 
<h2>Смотрят также</h2>
<div class="looking-for__list">
<a href="#" class="looking-for__list_item">Самые недооцененные фильмы</a><br>
<a href="#" class="looking-for__list_item">Недооцененные фильмы 2021</a><br>
<a href="#" class="looking-for__list_item">Недооцененные фильмы 2020</a><br>
<a href="#" class="looking-for__list_item">Фильмы которые ты уже пропустил</a><br>
<a href="#" class="looking-for__list_item">Эти фильмы должен посмотреть кажый</a><br>
<a href="#" class="looking-for__list_item">Думаешь что посмотрел все фильмы</a>
</div>
</div>  -->