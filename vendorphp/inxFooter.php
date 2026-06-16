                <div class="about">
                    <h2>Без рекламы</h2>
                    <div class="about__description">
                        <p class="about__description_content">
                            Если вы задались вопросом: "где смотреть Ютуб фильмы без рекламы" к тому же бесплатно
                            да еще и без регистрации - тогда нашли, что искали. Ведь eKino предоставляет свыше 1500+
                            фильмов, доступных к просмотру без рекламы. При этом не нужно платить деньги за ежемесячную
                            подписку - просто включил и смотришь.
                        </p>
                        <br>
                        <p class="about__description_content">
                            В нашей базе более 1500+ Ютуб фильмов, которые пополняются каждый день.
                            Никогда не было так легко найти хороший, недооцененный фильм и смотреть его без
                            раздражающей рекламы, которая постоянно появляется в самый ненужный момент.
                            eKino сделает для вас просмотр фильмов удовольствием, а поиски сократит до минимума.
                        </p>
                        <br>
                        <p class="about__description_content">
                            Мы публикуем кино всех жанров только в хорошем качестве: HD 720 и Full HD 1080.
                            Со встроенным и удобным видео-плеером от Ютуб. Только качественное кино, только удобный проигрыватель!
                        </p>
                        <h3>Бесплатно и без регистрации</h3>
                        <p class="about__description_content">
                            Все фильмы на eKino доступны без регистрации и полностью бесплатные.
                            Теперь все что вам нужно это включить хороший фильм и наслаждаться просмотром в высоком качестве.
                        </p>
                    </div>
                    <h2>Недооцененные фильмы</h2>
                    <div class="about__description">
                        <p class="about__description_content">
                            eKino - это бесплатный онлайн-кинотеатр в котором отобраны самые недооцененные
                            фильмы, какие вы уже пропустили или не смогли найти. Эти фильмы в своем большинстве
                            недооцененные профессиональными критиками, однако со временем получают свою славу от
                            обычных зрителей, таких как мы с вами.  
                        </p>
                        <br>
                        <p class="about__description_content">
                            После просмотра кино не забудьте сохранить наш сайт к себе в закладки и поделиться
                            в соц. сетях - это поможет развитию eKino и нашей цели "показа всех фильмов без рекламы",
                            от чего в результате вы только в выигрыше.
                        </p>
                        <br>
                        <p class="about__description_content">
                            Наш онлайн-кинотеатр не зарабатывает на зрителях и не просит донаты. Нам приятно
                            решать такую большую проблему с надоедливой рекламой. Желаем приятного просмотра!
                        </p>
                    </div>
                </div>
            </div>
        <!--------------------------> 
            <footer itemscope itemtype="http://schema.org/WPFooter">
                <div class="logo__box">
                    <img height="50" width="110" loading="lazy" src="<?php echo logotype() ?>" alt="eKino логотип">
                </div>
                <div class="copyright">
                     <a href="https://ekino.me/contact" rel="nofollow" target="_blank"> Сообщение администраторам </a>
                </div>
            </footer>
         <!--------------------------> 
        </div>

    <!--------------------------> 

    <!--------------------------> 
    
    </main>
<!------------------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/main.css?v=<?php echo get_version(); ?>">
    <link href="/fonts/Montserrat.css?v=4" rel="stylesheet" lazyload>
    <link href="/fonts/MontserratIcons.css?v=4" rel="stylesheet" lazyload>
    <script src="/js/jquery.js"></script>
    <script src="/js/swiper.js"></script>
    <script src="/js/interface.js?v=<?php echo get_version(); ?>"></script>
    <script src="/js/get_cookie.js?v=<?php echo get_version(); ?>"></script> 

<!---------------------------------------------------- Google-Метрика ---------------------------------------------------->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZ7R55RW3W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-WZ7R55RW3W');
    </script>
<!------------------------------------------------------------------------------------------------------------------------>
<!-- <script id="gather_config" type="text/javascript">window.Gather_SiteID = "ab17bc77-9ca1-437f-9b80-564e86cc4ca0";</script>
<script id="gather_script" src="https://online.gather.network/gather.app.js"></script> -->
<script async src="https://moevideo.biz/embed/js/mvpt.min.js"></script>
<!-- Yandex.RTB R-A-12624642-2 -->
<script>
window.addEventListener("load", () => {
    const render = (imageId) => {
        window.yaContextCb.push(() => {
            Ya.Context.AdvManager.render({
                "renderTo": imageId,
                "blockId": "R-A-12624642-2",
                "type": "inImage"
            })
        })
    }
    const renderInImage = (images) => {
        if (!images.length) {
            return
        }
        const image = images.shift()
        image.id = yandex_rtb_R-A-12624642-2-${Math.random().toString(16).slice(2)}
        if (image.tagName === "IMG" && !image.complete) {
            image.addEventListener("load", () => {
                render(image.id)
            }, { once: true })
        } else {
            render(image.id)
        }
        renderInImage(images)
    }
    renderInImage(Array.from(document.querySelectorAll("img")))
}, { once: true })
</script>
</body>
</html>