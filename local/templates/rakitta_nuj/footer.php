<footer>
    <div class="container-fluid site-map">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                    <ul>
                        <li><a href="/company/">О компании</a></li>
                    </ul>
                    <ul>
                        <li><a href="/products/">продукция</a></li>
                        <li><a href="/products/areas/">Область применения</a></li>
                        <li><a href="/products/">Каталог</a></li>
                        <li><a href="/products/certificates/">Сертификаты</a></li>
                    </ul>
                    <ul>
                        <li><a href="/preimyshestva/">Преимущества</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <ul>
                        <li><a href="/installation/">монтаж панелей</a></li>
                        <?
                        CModule::IncludeModule('iblock');
                        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
                        $arFilter = Array("IBLOCK_ID" => IntVal(6), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                        $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
                        $i = 1;
                        while ($ob = $res->GetNextElement()) :
                            $arFields = $ob->GetFields();
                            $arProps = $ob->GetProperties();
                            ?>
                            <li><a href="/installation/#<?= $arFields['CODE'] ?>" class="lsc"><?= $arFields['NAME'] ?></a></li>
                        <? endwhile ?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <ul>
                        <li><a href="/council/">Полезные советы</a></li>
                        <?
                        CModule::IncludeModule('iblock');
                        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
                        $arFilter = Array("IBLOCK_ID" => IntVal(1), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                        $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
                        while ($ob = $res->GetNextElement()) :
                            $arFields = $ob->GetFields();
                            ?>
                            <li>
                                <a href="/council/<?= $arFields["CODE"] ?>/"><?= $arFields["NAME"] ?></a>
                            </li>
                        <? endwhile ?>
                    </ul>
                    <ul>
                        <li><a href="/partners/">Партнерам</a></li>
                        <li><a href="/partners/#vantages">Преимущества работы</a></li>
                        <li><a href="/partners/#form">Анкета для дистрибьютеров</a></li>
                        <li><a href="/partners/#materials">Рекламные материалы</a></li>
                    </ul>
                    <ul>
                        <li><a href="/buy">Где купить</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <ul>
                        <li>Главный офис:</li>
                        <li>Санкт-Петербург, ул. Комсомола, д.1-3</li>
                        <li>тел. +7 (812) 425-69-63</li>
                        <li>info@rakitta.ru</li>
                        <li><a href="/contacts/" class="underline">посмотреть на карте</a></li>
                    </ul>
                    <ul>
                        <li>Производство и склад:</li>
                        <li>Санкт-Петербург, ул. Минеральная, д. 32</li>
                        <li><a href="/contacts/" class="underline">посмотреть на карте</a></li>
                    </ul>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
    <div class="container">
        <div class="row footer-info">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><p>IT поддержка бизнеса - <a href="http://www.dorado-c.ru/" class="underline">Dorado Consulting</a></p></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><p>Не является публичной офертой</p></div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><p>2016 © Rakitta, все права защищены</p></div>
            <a href="/"><img alt="" src="/assets/img/small-rakitta-logo.png" class="footer-logo"></a></div>
    </div>
</footer>
<script src="/assets/js/main.js?v=<?= time() ?>" type="text/javascript"></script>
<!— Yandex.Metrika counter —>
<script type="text/javascript"> (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter39834110 = new Ya.Metrika({id: 39834110, clickmap: true, trackLinks: true, accurateTrackBounce: true});
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks"); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/39834110" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!— /Yandex.Metrika counter —>
</body>
</html>