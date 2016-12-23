<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?>
<? $APPLICATION->SetTitle("Сертификаты") ?>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active"><? $APPLICATION->ShowTitle() ?></li>
        </ul>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
                <h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Сертификаты</h2>
            </div>
            <?
            CModule::IncludeModule('iblock');
            $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PROPERTY_*");
            $arFilter = Array("IBLOCK_ID" => IntVal(2), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
            $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
            while ($ob = $res->GetNextElement()) :
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
                ?>
                <div class="col-xs-12 col-sm-6 col-lg-3 certificate">
                    <a href="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" class="splash" data-splash-group="gallery">
                        <img alt="<?= $arFields["NAME"] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" width="100%">
                        <div class="btn-zoom"></div>
                    </a>
                    <p class="certificate-alt fs18"><?= $arFields["NAME"] ?></p>
                </div>
            <? endwhile; ?>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>