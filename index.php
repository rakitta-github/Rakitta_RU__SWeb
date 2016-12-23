<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><? $APPLICATION->SetTitle("3D панели Rakitta"); ?>
    <div id="carousel-panel-3d" class="main_carousel-panel-3d row margin-none">
        <?
        CModule::IncludeModule('iblock');
        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
        $arFilter = Array("IBLOCK_ID" => IntVal(5), "SECTION_ID" => intval(6), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
        $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
        $i = 1;
        while ($ob = $res->GetNextElement()) :
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();
            ?>
            <div class="desktop item <? if ($i++ == 1) echo ' active'; ?> col-xs-12 row">
                <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" width="100%">
            </div>
            <div class="mobile item col-xs-12 row">
                <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['PREVIEW_PICTURE']) ?>" width="100%">
            </div>
        <? endwhile ?>
    </div>
<?
$APPLICATION->IncludeFile(
    "/html/about_main_block.html",
    ["SORT" => "ASC"],
    Array("MODE" => "html")
);
?>

<?
$APPLICATION->IncludeFile(
    "/html/vantages_main_block.html",
    ["SORT" => "ASC"],
    Array("MODE" => "html")
);
?>

    <div class="container box">
        <div class="row where-to-use"><h2 class="mgb60">Где используются 3D панели Rakitta</h2>
            <?
            CModule::IncludeModule('iblock');
            $arFilter = ['IBLOCK_ID' => 3];
            $rsSect = CIBlockSection::GetList([], $arFilter, false, ['CODE', 'NAME', 'PICTURE']);
            while ($arSect = $rsSect->GetNext()) :
                ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="rakitta-block green-border-block">
                        <a href="/products/<?= $arSect['CODE'] ?>/">
                            <img alt="<?= $arSect['NAME'] ?>" src="<?= CFile::GetPath($arSect['PICTURE']) ?>">
                            <h3><?= $arSect['NAME'] ?></h3>
                        </a>
                        <a href="/products/<?= $arSect['CODE'] ?>/" class="btn-more">
                            <span>Подробнее </span>
                            <div></div>
                        </a>
                    </div>
                </div>
            <? endwhile ?>
        </div>
    </div>
    <div class="container box">
        <div class="row how-to-watch"><h2 class="mgb60">Как монтируются 3D панели Rakitta</h2>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="rakitta-block green-border-block">
                    <a href="/installation/#on_ceiling_instalation">
                        <img alt="" src="/assets/img/photo-figure-1.png">
                    </a>
                    <hr class="green-line">
                    <h3><a href="/installation/#on_ceiling_instalation">на потолок</a></h3></div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="rakitta-block green-border-block">
                    <a href="/installation/#on_wall_instalation">
                        <img alt="" src="/assets/img/photo-figure-2.png">
                    </a>
                    <hr class="green-line">
                    <h3><a href="/installation/#on_wall_instalation">на стены</a></h3></div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="rakitta-block green-border-block">
                    <a href="/installation/#armstrong_instalation">
                        <img alt="" src="/assets/img/photo-figure-3.png">
                    </a>
                    <hr class="green-line">
                    <h3><a href="/installation/#armstrong_instalation">в потолочные системы</a></h3></div>
            </div>
        </div>
    </div>
    <div class="container box">
        <h2 class="mgb60">Полезные советы</h2>
        <div class="row council-main plus full-img">
            <?
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID" => IntVal(1), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_CODE" => $_GET['SECTION_CODE']);
            $res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array("nPageSize" => 4), $arSelect);
            $i = 1;
            while ($ob = $res->GetNextElement()) :
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();
            ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
                <div class="col-xs-12 col-sm-4 col-md-12 col-lg-5 plus-icon">
                    <a href="/council/<?= $arFields["CODE"] ?>/">
                        <? $council_photo = CFile::ResizeImageGet($arFields['PREVIEW_PICTURE'], Array("width" => 231, "height" => 170), BX_RESIZE_IMAGE_EXACT) ?>

                        <img alt="<?= $arFields['NAME'] ?>" src="<?= $council_photo['src'] ?>">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 col-lg-7 rakitta-block">
                    <div class="plus-text">
                        <a href="/council/<?= $arFields["CODE"] ?>/">
                            <h3><?= $arFields["NAME"] ?></h3>
                            <p><?= $arFields["PREVIEW_TEXT"] ?></p>
                        </a>
                    </div>
                </div>
                <a href="/council/<?= $arFields["CODE"] ?>/" class="btn-more">
                    <span>Подробнее </span>
                    <div></div>
                </a>
            </div>
            <? if ($i++ == 2) : ?>
        </div>
        <div class="row council-main  plus full-img">
            <? endif ?>
            <? endwhile ?>
        </div>
    </div>
    <div class="container box">
        <h2 class="mgb60">3D панели Rakitta</h2>
        <div id="panel-3d" class="row panel-3d">
            <?
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "NAME", "IBLOCK_ID", "SECTION", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID" => IntVal(3), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
            $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
            while ($ob = $res->GetNextElement()) :
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
                $group = CIBlockElement::GetElementGroups($arFields["ID"]);
                $group = $group->Fetch();
                ?>
                <a href="/products/<?= $group['CODE'] ?>/<?= $arFields["CODE"] ?>/" class="rakitta-block">
                    <? $renderImage = CFile::ResizeImageGet($arFields['DETAIL_PICTURE'], Array("width" => 370, "height" => 300), BX_RESIZE_IMAGE_EXACT) ?>
                    <div class="panel-img"><img alt="<?= $arFields["NAME"] ?>" src="<?= $renderImage['src'] ?>"></div>
                    <h3 class="mbt30"><?= $arFields["NAME"] ?></h3>
                    <hr class="green-line">
                    <p><?= $arProps['SIZE_CATALOG']['VALUE'] ?></p>
                </a>
            <? endwhile; ?>

        </div>
    </div>
    <div class="container box certificate-block">
        <div class="row how-to-watch"><h2 class="mgb60">Качество 3D панелей Rakitta</h2>
            <?
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID" => IntVal(2), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
            $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
            while ($ob = $res->GetNextElement()) :
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
                ?>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <a href="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" class="splash" data-splash-group="gallery">
                        <img alt="<?= $arFields["NAME"] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" width="100%">
                        <div class="btn-zoom"></div>
                    </a>
                    <p class="certificate-alt fs18"><?= $arFields["NAME"] ?></p>
                </div>
            <? endwhile; ?>
        </div>
    </div>
    <div class="container">
        <div class="row"><a href="/buy/" class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 btn-buy">Купить 3D панели Rakitta</a></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>