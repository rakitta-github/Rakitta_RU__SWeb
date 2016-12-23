<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link href="/assets/style/style.css?v=<?= time() ?>" rel="stylesheet">
    <? $APPLICATION->ShowHead(); ?>
    <? $cur_page = $APPLICATION->GetCurPage(false); ?>
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>
    <div class="container">
        <div class="row header-wrapper">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                <div class="logo"><a href="/"><img alt="" src="/assets/img/rakita-logo-small.png"></a></div>
                <div class="tagline"><a href="/">Производство<br> 3D панелей</a></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-0">
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 col-xs-offset-1 col-sm-offset-0 col-md-offset-1 col-lg-offset-0 contacts phone">
                    <a href="/contacts/"><?
                        $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . "/include/phone.php",
                            Array(),
                            Array("MODE" => "html")
                        );
                        ?></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 col-xs-offset-1 col-sm-offset-0 col-md-offset-1 col-lg-offset-0 contacts address">
                    <address>
                        <?
                        $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . "/include/address.php",
                            Array(),
                            Array("MODE" => "html")
                        );
                        ?>
                    </address>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "",
                Array(
                    "PAGE" => "#SITE_DIR#search/",
                    "USE_SUGGEST" => "N"
                )
            );?>

        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header container">
            <button class="navbar-toggle" type="button" data-target="#navbarCollapse" data-toggle="collapse"> Меню</button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="container">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "submenu",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                )); ?>
            </div>
        </div>
    </nav>
</header>
