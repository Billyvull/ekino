<main>
    <div class="main__box">
        <div class="main__content">
<!---------------------------------------------------- require: H1 ----------------------------------------------------->
            <h1>
                <?php 
                 if(isset($_GET['page'])){
                 echo 'Ютуб Фильмы Без Рекламы <sup style="font-size: 16px;color: #ccc;">(Топ '. ((int) $_GET['page'])*60 .')</sup>' ;
                 }
                 else {
                 echo 'Ютуб Фильмы Без Рекламы' ;
                 }
                ?>
            </h1>
<!---------------------------------------------------------------------------------------------------------------------->
            <div class="genres" itemscope itemtype="https://schema.org/Movie">
                <h2>Жанры фильмов</h2>
                <div class="swiper-container">
                    <ul class="genres__list response__content swiper-wrapper">
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="https://ekino.me/<?php echo randfilm(); ?>" class="genre__box">
                                <img loading="lazy" src="../img/genres/random.png" class="genre__image" height="60" width="60" height="60" width="60" alt="Случайный фильм">
                                <div class="genre__name">Случайный фильм</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../boevik" class="genre__box">
                                <img loading="lazy" src="../img/genres/boevikLogotest.png" class="genre__image" height="60" width="60" alt="Боевик">
                                <div class="genre__name" itemprop="genre">Боевик</div>
                                <div class="genre__count"><?php echo boeviki(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../drama" class="genre__box">
                                <img loading="lazy" src="../img/genres/dramaLogo.png" class="genre__image" height="60" width="60" alt="Драма">
                                <div class="genre__name" itemprop="genre">Драма</div>
                                <div class="genre__count"><?php echo drama(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../detektiv" class="genre__box">
                                <img loading="lazy" src="../img/genres/detecivLogo.png" class="genre__image" height="60" width="60" alt="Детектив">
                                <div class="genre__name" itemprop="genre">Детектив</div>
                                <div class="genre__count"><?php echo detektiv(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../komediya" class="genre__box">
                                <img loading="lazy" src="../img/genres/comedyLogo.png" class="genre__image" height="60" width="60" alt="Комедия">
                                <div class="genre__name" itemprop="genre">Комедия</div>
                                <div class="genre__count"><?php echo komediya(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../krimial" class="genre__box">
                                <img loading="lazy" src="../img/genres/godLogo.png" class="genre__image" height="60" width="60" alt="Криминал">
                                <div class="genre__name" itemprop="genre">Криминал</div>
                                <div class="genre__count"><?php echo kriminal(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../melodrama" class="genre__box">
                                <img loading="lazy" src="../img/genres/melodramaLogo.png" class="genre__image" height="60" width="60" alt="Мелодрама">
                                <div class="genre__name" itemprop="genre">Мелодрама</div>
                                <div class="genre__count"><?php echo melodrama(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../multfilm" class="genre__box">
                                <img loading="lazy" src="../img/genres/multLogo.png" class="genre__image" height="60" width="60" alt="Мультфильм">
                                <div class="genre__name" itemprop="genre">Мультфильм</div>
                                <div class="genre__count"><?php echo multfilm(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../realfilm" class="genre__box">
                                <img loading="lazy" src="../img/genres/documentalLogo.png" class="genre__image" height="60" width="60"
                                    alt="На реальных событиях">
                                <div class="genre__name" itemprop="genre">На реальных событиях</div>
                                <div class="genre__count"><?php echo realfilm(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../priklyucheniya" class="genre__box">
                                <img loading="lazy" src="../img/genres/adventureLogo.png" class="genre__image" height="60" width="60" alt="Приключения">
                                <div class="genre__name" itemprop="genre">Приключения</div>
                                <div class="genre__count"><?php echo adventure(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../triller" class="genre__box">
                                <img loading="lazy" src="../img/genres/trillerLogo.png" class="genre__image" height="60" width="60" alt="Триллер">
                                <div class="genre__name" itemprop="genre">Триллер</div>
                                <div class="genre__count"><?php echo triller(); ?> фильмов</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../uzhasy" class="genre__box">
                                <img loading="lazy" src="../img/genres/horrorLogo.png" class="genre__image" height="60" width="60" alt="Ужасы">
                                 <div class="genre__name" itemprop="genre">Ужасы</div>
                                 <div class="genre__count"><?php echo horror(); ?> фильмов</div>
                            </a>
                        </li> 
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="../fantastika" class="genre__box">
                                <img loading="lazy" src="../img/genres/fantastikaLogo.png" class="genre__image" height="60" width="60" alt="Фантастика">
                                <div class="genre__name" itemprop="genre">Фантастика</div>
                                <div class="genre__count"><?php echo fantastik(); ?> фильмов</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>