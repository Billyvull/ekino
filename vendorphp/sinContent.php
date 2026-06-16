<?php views_update($single['id']); ?>
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
   

<!------------------------------------------------------------------------------------------------------------------------>
    <main>
        <div class="main__box">
            <div class="main__content">
                <a href="https://aflink.ru/g/7at4fc2f4eec3879fa540d79a64861/?i=4&erid=LatgC8yb9" class="shadow-55" rel="nofollow" target="_blank"><img src="https://ekino.me/img/reg.png" width="100%" height="100%" alt="ivi"></a>

<!---------------------------------------------------------- ПЛЕЕР ------------------------------------------------------->
                <div class="cinema" data-film="<?php echo $single["id"]; ?>">
                    <!-------------------------->
                    <!-- ?playlist=<php echo $single["iframevideo"]; ?>&autoplay=1&color=white -->
<!-- <div id="player"></div>

<script>
   var player = new Playerjs({id:"player", file:"https://ekino.me/vv.mp4"});
</script> -->
<style>

        .video-wrapper {
            position: relative;
            width: 100%;
            max-width: 100%;
        }

        video {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        .custom-controls {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
            font-family: sans-serif;
            z-index: 2;
        }

        .fullscreen-play-button {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            color: white;
            border: none;
            font-size: 32px;
            cursor: pointer;
            z-index: 3;
        }

        .stop-button,
        .fullscreen-button {
            position: absolute;
            top: 10px;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .stop-button {
            right: 10px;
        }

        .fullscreen-button {
            right: 120px;
        }

        .countdown-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 36px;
            background-color: rgba(0,0,0,0.6);
            padding: 20px 40px;
            border-radius: 10px;
            font-family: sans-serif;
            opacity: 0;
            transition: opacity 0.5s;
            z-index: 4;
        }

        .countdown-text.show {
            opacity: 1;
        }
    </style>

<div class="video-wrapper">
    
    <video id="videoPlayer" src="player/vv.mp4"></video>
    <button id="playBtn" class="fullscreen-play-button">▶️ Воспроизвести</button>
    <div class="custom-controls" id="fakeTimer">0:00 / 1:30:51</div>
    <div id="countdown" class="countdown-text"></div>
    <button id="stopBtn" class="stop-button" style="display:none;">⏹️ Стоп</button>
    <button id="fullscreenBtn" class="fullscreen-button" style="display:none;">🔳 Полный экран</button>
</div>

<script>
    const playBtn = document.getElementById('playBtn');
    const video = document.getElementById('videoPlayer');
    const fakeTimer = document.getElementById('fakeTimer');
    const countdown = document.getElementById('countdown');
    const stopBtn = document.getElementById('stopBtn');
    const fullscreenBtn = document.getElementById('fullscreenBtn');

    let fakeCurrentTime = 0;
    const fakeDuration = 1 * 3600 + 30 * 60 + 51; // 1:30:51 в секундах
    let intervalId;
    let playing = false;

    function formatTime(seconds) {
        const h = Math.floor(seconds / 3600);
        const m = Math.floor((seconds % 3600) / 60);
        const s = seconds % 60;
        return `${h > 0 ? h + ':' : ''}${h > 0 && m < 10 ? '0' : ''}${m}:${s < 10 ? '0' : ''}${s}`;
    }

    function startFakeTimer() {
        intervalId = setInterval(() => {
            if (fakeCurrentTime >= fakeDuration) {
                clearInterval(intervalId);
                playing = false;
                return;
            }
            fakeCurrentTime++;
            fakeTimer.textContent = `${formatTime(fakeCurrentTime)} / 1:30:51`;
        }, 1000);
    }

    function stopFakeVideo() {
        clearInterval(intervalId);
        fakeCurrentTime = 0;
        playing = false;
        video.pause();
        video.currentTime = 0;
        fakeTimer.textContent = `0:00 / 1:30:51`;
        stopBtn.style.display = 'none';
        fullscreenBtn.style.display = 'none';
        playBtn.style.display = 'block';
    }

    async function startPlayback() {
        if (playing) return;

        playing = true;
        playBtn.style.display = 'none';

        // Обратный отсчёт
        for (let i = 3; i >= 1; i--) {
            countdown.textContent = `Фильм начнётся через ${i} сек...`;
            countdown.classList.add('show');
            await new Promise(r => setTimeout(r, 1000));
        }

        countdown.classList.remove('show');

        video.play();
        startFakeTimer();
        stopBtn.style.display = 'block';
        fullscreenBtn.style.display = 'block';
    }

    playBtn.addEventListener('click', startPlayback);
    stopBtn.addEventListener('click', stopFakeVideo);

    fullscreenBtn.addEventListener('click', () => {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) { // Safari
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { // IE11
            video.msRequestFullscreen();
        }
    });
</script>


                    <!-- <iframe width="100%" height="500" src="https://rutube.ru/play/embed/83820a8b2695804d9e977ee5b6834f47/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
<!-- <iframe class="videoContent" id="film_main"  
src="<php echo $single["apinew"]; ?>?autoplay=0&color=white" 
width="100%"
loading="lazy"
height="450" 
frameborder="0" 
title="YouTube video player"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen>
</iframe>  -->


                    <!-------------------------->
                    <div class="cinema__attention"> <!----- КНОПКА "НЕ РАБОТАЕТ ФИЛЬМ" ----->
                        <form action="functions/errorvideo" method="post" id="CinemaAttention">
                            <input type="hidden" name="url" value="https://ekino.me/<?php echo $single["url"]; ?>">
                            <input type="hidden" name="pagenamefilm" value="<?php echo $single["htitle"]; ?>">
                            <input type="hidden" name="textmessage" value="Открытый вопрос">
                            <input type="hidden" name="datamessage" valueAsDate=new Date()>
                            <input type="submit" value="Не работает <?php echo $single["tip"]; ?>? - Сообщить">
                        </form>
                    </div>
                    <!-------------------------->
                </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="container" itemscope itemtype="https://schema.org/Movie">
                <div style="display:none;" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
    			    <link itemprop="thumbnail" href="http://ekino.me/<?php echo $single["img"]; ?>" /> <!----- ПРЕВЬЮ КИНОПРЕМЬЕРЫ 'Абслютный путь' ----->
    			    <img itemprop="thumbnailUrl" src="/<?php echo $single["img"]; ?>" title="<?php echo $single["title"]; ?>" alt="<?php echo $single["title"]; ?>"> <!----- ПРЕВЬЮ КИНОПРЕМЬЕРЫ ----->
    		    	<meta itemprop="uploadDate" content="<?php echo $single["date"]; ?>" /> <!----- ДАТА ПУБЛИКАЦИИ ФИЛЬМА ----->
    		    	<meta itemprop="datePublished" content="<?php echo $single["age"]; ?>"> <!----- ВОЗРАСТНОЙ РЕЙТИНГ ----->
   			    	<link itemprop="url" href="http://ekino.me/<?php echo $single["url"]; ?>" /> <!----- ССЫЛКА НА КИНОПРЕМЬЕРУ ----->
                    <meta itemprop="playerType" content="YouTube, Flash, HTML5"> <!----- ВЫБОР ПЛЕЕРА ----->
                    <meta itemprop="width" content="720"> <!----- ШИРИНА ПЛЕЕРА  ----->
    		    	<meta itemprop="height" content="500"> <!----- ВЫСОТА ПЛЕЕРА ----->
                    <meta itemprop="videoQuality" content="medium"> <!----- КАЧЕСТВО КИНОПРЕМЬЕРЫ ----->
                    <meta itemprop="name" content="<?php echo $single["tip"]; ?> <?php echo $single["title"]; ?> <?php echo $single["ads"]; ?>">
                    <meta itemprop="description" content="<?php echo $single["hdescription"]; ?>">
                    <meta itemprop="isFamilyFriendly" content="true">
                    <meta itemprop="duration" content="<?php echo $single["length"]; ?> мин." />
                </div>
<!------------------------------------------------------------------------------------------------------------------------>
                    <div class="film">
                        <h1 class="film__name" itemprop="name"> <!----- НАЗВАНИЕ КИНОПРЕМЬЕРЫ ----->
                            <?php echo $single["tip"]; ?>
                            <?php echo $single["title"]; ?> 
                            <?php echo $single["ads"]; ?>
                        </h1>
                        <div class="film__wrap">
                            <div class="film__leftbar">
                                <div class="film__leftbar_primary rate-<?php echo $single["ricon"]; ?>"> <!----- ЦВЕТ РЕЙТИНГА ----->
                                    <span class="film__leftbar_genre">
                                        <span><?php echo $single["genre"]; ?></span>  <!----- ЖАНР ----->
                                    </span>
                                    <span class="film__leftbar_rate">
                                        <span class="material-icons" >thumb_up</span> <?php echo $single["rating"]; ?> <!----- РЕЙТИНГ ----->
                                    </span>
                                </div>
                                <div class="film__leftbar_secondary">
                                    <span class="film__leftbar_views"><?php echo custom_number_format($single["views"]); ?> зрителей</span> <!----- КОЛ-ВО ЗРИТЕЛЕЙ ----->
                                    <span class="film__leftbar_date" content="<?php echo $single["date"]; ?>"><?php echo(format_date($single["date"])); ?></span> <!----- ВРЕМЯ ПУБЛИКАЦИИ ----->
                                </div>
<!------------------------------------------------------------------------------------------------------------------------------------>
                                <div class="film__leftbar_description">
                                    <h2>Смотреть онлайн</h2>
                                    <p class="film__description_content"><?php echo $single["d1"]; ?></p> <!----- ОПИСАНИЕ 1 ----->
                                    <p class="film__description_content"><?php echo $single["d2"]; ?></p> <!----- ОПИСАНИЕ 2 ----->
                                    <p class="film__description_content"><?php echo $single["d3"]; ?></p> <!----- ОПИСАНИЕ 3 ----->
<!-- Контейнер для видео -->
<div id="ut-embed"></div>
<!-- Инициализация баннера -->
<script>
(function UTCoreInitialization() {
  if (window.UTInventoryCore) {
    new window.UTInventoryCore({
      type: "embed",
      host: 124,
      content: false,
      container: "ut-embed",
      width: 560,
      height: 315,
      playMode: "autoplay-visible",
      collapse: "none",
    });
    return;
  }
  setTimeout(UTCoreInitialization, 100);
})();
</script>
<br>
                                    <!-- <em class="film__description_copyright">Описание взято с site.ru</em> -->
                                    <hr class="film__description_line">
                                </div>
<!------------------------------------------------------------------------------------------------------------------------------------>
                          <!------------ КОММЕНТАРИИ ------------>
                                <!-- <div id="mc-container"></div>
                                <script type="text/javascript" lazyload>
                                    cackle_widget = window.cackle_widget || [];
                                    cackle_widget.push({
                                        widget: 'Comment',
                                        id: 79654
                                    });
                                    (function () {
                                        var mc = document.createElement('script');
                                        mc.type = 'text/javascript';
                                        mc.async = true;
                                        mc.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                                            '://cackle.me/widget.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(mc, s.nextSibling);
                                    })();
                                </script>
                                <a id="mc-link" href="https://cackle.me" rel="nofollow"></a>
                                <div id="mc-container"></div> -->
<!-- --------------------
                                <div id="mc-container"></div>
<script type="text/javascript">
cackle_widget = window.cackle_widget || [];
cackle_widget.push({widget: 'Comment', id: 79961});
(function() {
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
<a id="mc-link" href="https://cackle.me" rel="nofollow"></a>
----------------- -->
                            <!----------------------------------->
                            <!-- admitad.banner: 3pp1vpx6ltec3879fa54d7a732141a Kwork -->
<!-- <a target="_blank" rel="nofollow" class="sha4" href="https://aflink.ru/g/3pp1vpx6ltec3879fa54d7a732141a/?i=4"><img width="728" height="90" border="0" src="https://aflink.ru/b/3pp1vpx6ltec3879fa54d7a732141a/" alt="Kwork"/></a>
<a target="_blank" rel="nofollow" class="sha4" href="https://aflink.ru/g/5r68oepm7yec3879fa54c8a37829f9/?i=4&erid=LatgBknpQ"><img width="728" height="90" border="0" src="https://aflink.ru/b/5r68oepm7yec3879fa54c8a37829f9/" alt="Cocos-moscow.ru"/></a>
<a target="_blank" rel="nofollow" class="sha4" href="https://aflink.ru/g/hnja9jrj39ec3879fa5472de1a383e/?i=4&erid=LatgCAzrt"><img width="728" height="90" border="0" src="https://aflink.ru/b/hnja9jrj39ec3879fa5472de1a383e/" alt="Otus"/></a> -->
                            </div>
                            
<!----------------------------------------------------- ХАРАКТЕРИСТИКИ ------------------------------------------------------------------->
                            <div class="film__rightbar">
                                <link itemprop="image" href="<?php echo $single["img"]; ?>">
                                <table class="film__table">
                                    <tr class="film__table_row">
                                        <th class="table__header">ID:</th>
                                        <td class="table__data"><?php echo $single["id"]; ?></td>
                                    </tr>
                                    <tr class="film__table_row">
                                        <th class="table__header">Название:</th>
                                        <td class="table__data" itemprop="alternativeHeadline">«<?php echo $single["engname"]; ?>»</td>
                                    </tr>
                                    <tr class="film__table_row">
                                        <th class="table__header">Год выхода:</th>
                                        <td class="table__data" itemprop="copyrightYear"><?php echo $single["releaseyear"]; ?></td>
                                    </tr>
                                    <tr class="film__table_row" itemprop="inLanguage" content="ru">
                                        <th class="table__header">Озвучка:</th>
                                        <td class="table__data"><?php echo $single["voiceover"]; ?></td>
                                    </tr>
                                    <tr class="film__table_row">
                                        <th class="table__header">Качество:</th>
                                        <td class="table__data"><?php echo $single["quality"]; ?></td>
                                    </tr>
                                    <tr class="film__table_row">
                                        <th class="table__header">Оценка:</th>
                                        <td class="table__data" itemprop="contentRating"><?php echo $single["rating"]; ?>
                                        </td>
                                    </tr>
                                    <tr class="film__table_row">
                                        <th class="table__header">Жанр:</th>
                                        <td class="table__data" itemprop="genre"><?php echo $single["genre"]; ?></td>
                                    </tr>
                                    
                                    <tr class="film__table_row">
                                        <th class="table__header">Время:</th>
                                        <td class="table__data" itemprop="duration"><?php echo $single["length"]; ?> мин.</td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Дата выхода:</th>
                                        <td class="table__data" itemprop="datePublished"><?php echo $single["releasedate"]; ?></td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Страна:</th>
                                        <td class="table__data" itemprop="contributor"><?php echo $single["country"]; ?></td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Возраст:</th>
                                        <td class="table__data"><?php echo $single["age"]; ?></td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Стоимость:</th>
                                        <td class="table__data"><?php echo $single["price"]; ?></td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Режиссер:</th>
                                        <td class="table__data" itemprop="director"><?php echo $single["director"]; ?></td>
                                    </tr>

                                    <tr class="film__table_row">
                                        <th class="table__header">Актеры:</th>
                                        <td class="table__data" itemprop="actors"><?php echo $single["actors"]; ?></td>
                                    </tr>
                                    <tr class="film__table_row">
                                    <th class="table__header">
                                    <!-- admitad.banner: fsqxg9k6wsec3879fa54d7a732141a Kwork -->
                                    <a target="_blank" rel="nofollow" href="https://www.joom.ru"><img width="345" height="60" border="0" src="https://ad.admitad.com/b/lk92k7vnbkec3879fa5479deb39b46/" alt="Kwork"/></a>
                                    <!-- /admitad.banner -->
                                    </th>
                                    </tr>
                                </table>
                            </div>
<!------------------------------------------------------------------------------------------------------------------------------------>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------>
                    <div class="sidebar">
                        <?php ?>
                        <h3>Похожие <?php echo mb_strtolower($tip);?>ы </h3>
                        <ul class="similar__list"> 
                            <?php
                            $category = $single["genre"];
                            $findme = ',';
                            $resultat = strpos($category, $findme);
                            if ($resultat === false) 
                                {
                                $singles = $category();
                                }
                            else 
                                {
                                 $variable  = substr($category, 0, strpos($category, ","));
                                 $singles = $variable();
                                }
                        foreach ($singles as $single) { ?>
                            <li class="similar__list_item">
                                <a href="/<?php echo $single["url"]; ?>" class="similar">
                                    <div class="similar__background">
                                        <img loading="lazy" src="<?php echo $single["img"]; ?>" class="similar__background_image" alt="<?php echo $single["tip"]; ?> <?php echo $single["title"]; ?> <?php echo $single["ads"]; ?>">
                                        <img loading="lazy" src="img/play_icon.png" class="similar__background_play" alt="смотреть онлайн <?php echo $single["tip"]; ?> <?php echo $single["title"]; ?>">
                                        <span class="similar__background_time"><?php echo $single["ltime"]; ?></span>
                                    </div>
                                    <div class="similar__content">
                                        <div class="similar__content_name">
                                            <?php echo $single["title"]; ?>
                                        </div>
                                        <div class="similar__primary rate-<?php echo $single["ricon"]; ?>">
                                            <span class="similar__content_genre"><?php echo $single["genre"]; ?></span>
                                            <span class="similar__content_rate">
                                            <span class="material-icons">thumb_up</span><?php echo $single["rating"]; ?></span>
                                        </div>
                                        <div class="similar__secondary">
                                            <span class="similar__content_views"><?php echo custom_number_format($single["views"]); ?> зрителей</span>
                                            <span class="similar__content_date"><?php echo(format_date($single["date"])); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </li> <?php } ?>
                        </ul>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------>
                </div>
            </div>