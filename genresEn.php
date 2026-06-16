<div class="genres" itemscope itemtype="https://schema.org/Movie">
                <h2>Genres of films</h2>
                <div class="swiper-container">
                <ul class="genres__list response__content swiper-wrapper">
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="https://ekino.me/<?php echo randfilm(); ?>" class="genre__box">
                                <img loading="lazy" src="/img/genres/random.png" class="genre__image" height="60" width="60" height="60" width="60" alt="Random movie">
                                <div class="genre__name">Random movie</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/boevik" class="genre__box">
                                <img loading="lazy" src="/img/genres/boevikLogotest.png" class="genre__image" height="60" width="60" alt="Action">
                                <div class="genre__name" itemprop="genre">Action</div>
                                <div class="genre__count"><?php echo boeviki(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/drama" class="genre__box">
                                <img loading="lazy" src="/img/genres/dramaLogo.png" class="genre__image" height="60" width="60" alt="Drama">
                                <div class="genre__name" itemprop="genre">Drama</div>
                                <div class="genre__count"><?php echo drama(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/detektiv" class="genre__box">
                                <img loading="lazy" src="/img/genres/detecivLogo.png" class="genre__image" height="60" width="60" alt="Detective">
                                <div class="genre__name" itemprop="genre">Detective</div>
                                <div class="genre__count"><?php echo detektiv(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/komediya" class="genre__box">
                                <img loading="lazy" src="/img/genres/comedyLogo.png" class="genre__image" height="60" width="60" alt="Comedy">
                                <div class="genre__name" itemprop="genre">Comedy</div>
                                <div class="genre__count"><?php echo komediya(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/krimial" class="genre__box">
                                <img loading="lazy" src="/img/genres/godLogo.png" class="genre__image" height="60" width="60" alt="Crime">
                                <div class="genre__name" itemprop="genre">Crime</div>
                                <div class="genre__count"><?php echo kriminal(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/melodrama" class="genre__box">
                                <img loading="lazy" src="/img/genres/melodramaLogo.png" class="genre__image" height="60" width="60" alt="Melodrama">
                                <div class="genre__name" itemprop="genre">Melodrama</div>
                                <div class="genre__count"><?php echo melodrama(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/multfilm" class="genre__box">
                                <img loading="lazy" src="/img/genres/multLogo.png" class="genre__image" height="60" width="60" alt="Cartoon">
                                <div class="genre__name" itemprop="genre">Cartoon</div>
                                <div class="genre__count"><?php echo multfilm(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/realfilm" class="genre__box">
                                <img loading="lazy" src="/img/genres/documentalLogo.png" class="genre__image" height="60" width="60" alt="On real events">
                                <div class="genre__name" itemprop="genre">On real events</div>
                                <div class="genre__count"><?php echo realfilm(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/priklyucheniya" class="genre__box">
                                <img loading="lazy" src="/img/genres/adventureLogo.png" class="genre__image" height="60" width="60" alt="Adventures">
                                <div class="genre__name" itemprop="genre">Adventures</div>
                                <div class="genre__count"><?php echo adventure(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/triller" class="genre__box">
                                <img loading="lazy" src="/img/genres/trillerLogo.png" class="genre__image" height="60" width="60" alt="Thriller">
                                <div class="genre__name" itemprop="genre">Thriller</div>
                                <div class="genre__count"><?php echo triller(); ?> movies</div>
                            </a>
                        </li>
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/uzhasy" class="genre__box">
                                <img loading="lazy" src="/img/genres/horrorLogo.png" class="genre__image" height="60" width="60" alt="Horrors">
                                 <div class="genre__name" itemprop="genre">Horrors</div>
                                 <div class="genre__count"><?php echo horror(); ?> movies</div>
                            </a>
                        </li> 
                        <li class="genres__list_item response__content_item swiper-slide">
                            <a href="/fantastika" class="genre__box">
                                <img loading="lazy" src="/img/genres/fantastikaLogo.png" class="genre__image" height="60" width="60" alt="Fantasy">
                                <div class="genre__name" itemprop="genre">Fantasy</div>
                                <div class="genre__count"><?php echo fantastik(); ?> movies</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>