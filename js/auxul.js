$(document).ready(function () {
    /*Старые браузеры*/
    var yaBrowserUpdater = new ya.browserUpdater.init({
        "lang": "ru",
        "browsers": {
            "yabrowser": "15.10",
            "chrome": "52",
            "ie": "10",
            "opera": "40",
            "safari": "8",
            "fx": "47",
            "iron": "35",
            "flock": "Infinity",
            "palemoon": "25",
            "camino": "Infinity",
            "maxthon": "4.5",
            "seamonkey": "2.3",
            "theme": "blue"
        }
    });
    $('#plan_tabs').tabs();
    /*Карусель сертификатов*/
    $("#carousel_certs").owlCarousel({
        navigation: true,
        navigationText: ['←', '→'],
        slideSpeed: 300,
        goToFirst: true,
        goToFirstSpeed: 100,
        pagination: false,
        items: 4,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: [768, 2],
        itemsMobile: [480, 1]
    });
    /*Карусель отзывов*/
    $("#text_testims").owlCarousel({
        navigation: true,
        navigationText: ['←', '→'],
        slideSpeed: 300,
        goToFirst: true,
        goToFirstSpeed: 100,
        pagination: false,
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false
    });
    /* Галерея сертификатов */
    $(function () {
        $("[data-fancybox]").fancybox({
            speed: 330,
            opacity: 'auto',
            closeBtn: true
        });
    });
    /* Видео */
    $(".video_wrapper").click(function () {
        var a = $(this).attr("data-youtube");
        $(this).html('<iframe src="https://www.youtube.com/embed/' + a + '?showinfo=0&rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>')
    });

    /*Конец документа*/
});