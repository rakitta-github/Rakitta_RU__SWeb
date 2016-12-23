//= jquery.min.js
//= bootstrap.min.js
//= jquery.mousewheel.min.js
//= slick.min.js
//= stiky-kit.js
//= holder.js
//= jquery.colorbox-min.js

$(document).ready(function () {

        function mobile() {
            $("#carousel-panel-3d.main_carousel-panel-3d").slick('slickUnfilter');
            if ($(document).width() <= 768)
                $("#carousel-panel-3d.main_carousel-panel-3d").slick('slickFilter', '.mobile');
            else
                $("#carousel-panel-3d.main_carousel-panel-3d").slick('slickFilter', '.desktop');
        }


        var navtop = $('nav.navbar').offset();

        if ($('.install-nav').length) {
            $('.install-nav').stick_in_parent();
        }

        $(".install-nav").stick_in_parent()
            .on("sticky_kit:stick", function (e) {
                $('.install-nav').css('margin-top', (document.documentElement.clientHeight / 2 - $('.install-nav').height() / 2) + 10);
            })
            .on("sticky_kit:unstick", function (e) {
                $('.install-nav').css('margin-top', '61px');
            });

        $(document).scroll(function () {
                var scrolltop = $(document).scrollTop();
                if (scrolltop >= navtop.top) {
                    $('nav.navbar').css('position', 'fixed');
                    $('nav.navbar').css('margin', '0');
                    $('nav.navbar').css('top', '0');
                }
                else {
                    $('nav.navbar').removeAttr('style');
                }
            }
        );

        // Tabs на странице "Где купить"
        $('#myTab a[href="#retail"]').tab('show');
        $('#myTab a[href="#wholesale"]').tab('show');

        // Yandex Map на странице "Где купить"
        if ($("div").is('.ym')) {
            ymaps.ready(init);
            var myMap,
                myPlacemark;

            var contactsMap,
                mainOffice;

            function init() {
                if ($("div").is("#map")) {

                    myMap = new ymaps.Map("map", {
                        center: [59.91815364, 30.30557800],
                        zoom: 10
                    });

                    myPlacemark = new ymaps.Placemark([55.76, 37.64], {
                        hintContent: 'Москва!',
                        balloonContent: 'Столица России'
                    });

                    myMap.geoObjects.add(myPlacemark);
                }

                /* Yandex Map на странице "Контакты" */

                if ($("div").is("#contactsMap")) {
                    contactsMap = new ymaps.Map("contactsMap", {
                        center: [59.91815364, 30.30557800],
                        zoom: 10
                    });

                    mainOffice = new ymaps.Placemark([59.96222806, 30.36366750], {
                        hintContent: 'Главный офис',
                        balloonContent: 'Санкт-Петербург, ул. Комсомола, д.1-3'
                    });

                    contactsMap.geoObjects.add(mainOffice);

                }
            }
        }

        if ($("div").is(".myslick-about")) {
            $(".myslick-about").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                loop: true,
                variableWidth: true,
                centerMode: true,
                autoplaySpeed: 5000
            });
        }

        if ($("div").is("#carousel-partners")) {
            $("#carousel-partners").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        }

        if ($("div").is("#carousel-panel-3d")) {
            $("#carousel-panel-3d").slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                loop: true,
                autoplaySpeed: 5000
            });
        }

        mobile();

        $(window).resize(function () {
            mobile();
        });


        if ($("div").is("#panel-3d")) {
            $("#panel-3d").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                variableWidth: true,
                autoplaySpeed: 5000,
                centerMode: true,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }

        $('.splash').colorbox({
            scalePhotos: true,
            maxWidth: '90%',
            maxHeight: '90%'
        });

        $('#carousel-panel-3d').css('opacity', 1);
    }
);
