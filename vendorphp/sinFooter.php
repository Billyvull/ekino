            <footer itemscope itemtype="http://schema.org/WPFooter">
                   <div class="logo__box">
                       <img height="50" width="110" loading="lazy" src="<?php echo logotype() ?>" alt="ekino логотип">
                   </div>
                   <div class="copyright">
                     <a href="https://ekino.me/contact" rel="nofollow" target="_blank"> Сообщение администраторам </a>
                   </div>
            </footer>

    <!--------------------------> 

    <!--------------------------> 
    </main>
<!------------------------------------------------------------------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="/styles/film.css?v=<?php echo get_version(); ?>">
    <link href="/fonts/Montserrat.css?v=4" rel="stylesheet" lazyload>
    <link href="/fonts/MontserratIcons.css?v=4" rel="stylesheet" lazyload>
    <script src="/js/jquery.js"></script>
    <script src="/js/playerjs1.js" type="text/javascript"></script>
    <script src="/js/interface.js?v=<?php echo get_version(); ?>"></script>
    <script src="/js/set_cookie.js?v=<?php echo get_version(); ?>"></script>
    <script src="/js/actime.js?v=<?php echo get_version(); ?>"></script>
<!------------------------------------------------------------------------------------------------------------------------------------>
<!---------------------------------------------------- Google-Метрика ---------------------------------------------------->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZ7R55RW3W"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-WZ7R55RW3W');
    </script>
<!------------------------------------------------------------------------------------------------------------------------>
<!-- <script id="gather_config" type="text/javascript">window.Gather_SiteID = "ab17bc77-9ca1-437f-9b80-564e86cc4ca0";</script>
<script id="gather_script" src="https://online.gather.network/gather.app.js"></script> -->
<script async src="https://moevideo.biz/embed/js/mvpt.min.js"></script>
<!-- Yandex.RTB R-A-12624642-2 -->
<!-- <script>
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
</script> -->
</body>
</html>