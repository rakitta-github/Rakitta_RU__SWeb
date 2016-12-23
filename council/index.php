<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?>
<? $APPLICATION->SetTitle("Полезные советы") ?>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active"><? $APPLICATION->ShowTitle() ?></li>
        </ul>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none"><h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Полезные советы</h2></div>
        </div>
        <div class="row">
            <?
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID" => IntVal(1), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_CODE" => $_GET['SECTION_CODE']);
            $res = CIBlockElement::GetList(Array("SORT" => "ASC", "DATE_CREATE"=>"DESC"), $arFilter, false, false, $arSelect);
            $i = 1;
            while ($ob = $res->GetNextElement()) :
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();
            ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 council-block">
                <div class="rakitta-block">
                    <a href="/council/<?= $arFields["CODE"] ?>/">
                        <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>">
                        <h3 class="mbt30"><?= $arFields["NAME"] ?></h3>
                        <p><?= $arFields["PREVIEW_TEXT"] ?></p>
                    </a>
                </div>
                <a href="/council/<?= $arFields["CODE"] ?>/" class="btn-more">
                    <span>Подробнее </span>
                    <div></div>
                </a>
            </div>
            <? if ($i++ == 2) : ?>
        </div>
        <div class="row">
            <? endif ?>
            <? endwhile ?>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>