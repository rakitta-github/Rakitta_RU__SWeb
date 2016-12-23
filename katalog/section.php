<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?>
<? $APPLICATION->SetTitle("Коллекция") ?>
<div class="container collection_page">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
        <?
        CModule::IncludeModule('iblock');
        $arFilter = array('IBLOCK_ID' => 3, "CODE" => $_GET['SECTION_CODE']);
        $rsSect = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter);
        while ($arSect = $rsSect->GetNext()) :
            ?>
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li><a href="/katalog/">Каталог продукции Rakitta </a></li>
                <li class="active"><?= $arSect['NAME'] ?></li>
            </ul>
            <h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 padding-none text-left">
                <?= $arSect['NAME'] ?>
            </h2>
        <? endwhile ?>
    </div>
    <div class="row plus full-img">
        <?
        $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
        $arFilter = Array("IBLOCK_ID" => IntVal(3), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_CODE" => $_GET['SECTION_CODE']);
        $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
        $i = 1;
        while ($ob = $res->GetNextElement()) :
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();
            ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block products_section">
                <!--                    href="/products/--><? //= $_GET['SECTION_CODE']
                ?><!--/--><? //= $arFields['CODE']
                ?><!--/"-->
                <div class="rakitta-block plus-text collection-header clearfix">
                    <div class="col-xs-12 col-sm-4 col-md-12 col-lg-5 plus-icon clearfix">
                        <div class="carousel slide" id="carousel-small-<?= $i ?>" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="/katalog/<?= $_GET['SECTION_CODE'] ?>/<?= $arFields['CODE'] ?>/">
                                        <? $DETAIL_PICTURE = CFile::ResizeImageGet($arFields['DETAIL_PICTURE'], ["width" => 231, "height" => 155], BX_RESIZE_IMAGE_EXACT) ?>
                                        <img alt="<?= $arFields["NAME"] ?>" src="<?= $DETAIL_PICTURE['src'] ?>">
                                    </a>
                                </div>
                                <? foreach ($arProps['IMG_DETAIL']['VALUE'] as $img_detail) : ?>
                                    <div class="item">
                                        <a href="/katalog/<?= $_GET['SECTION_CODE'] ?>/<?= $arFields['CODE'] ?>/">
                                            <? $img_detail_resize = CFile::ResizeImageGet($img_detail, ["width" => 231, "height" => 155], BX_RESIZE_IMAGE_EXACT) ?>
                                            <img alt="" src="<?= $img_detail_resize['src'] ?>">
                                        </a>
                                    </div>
                                <? endforeach; ?>
                            </div>
                            <a href="#carousel-small-<?= $i ?>" class="left carousel-control small-slider" data-slide="prev"><span></span></a>
                            <a href="#carousel-small-<?= $i++ ?>" class="right carousel-control small-slider" data-slide="next"><span></span></a></div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-12 col-lg-7 plus-text"><h3><?= $arFields['NAME'] ?></h3>
                        <p><?= $arFields['PREVIEW_TEXT'] ?>
                            <span class="green"><?= $arProps['SIZE_CATALOG']['VALUE'] ?></span>
                        </p>
                    </div>
                </div>
                <a href="/katalog/<?= $_GET['SECTION_CODE'] ?>/<?= $arFields['CODE'] ?>/" class="btn-more"> <span>Подробнее </span>
                    <div></div>
                </a></div>
        <? endwhile ?>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>
