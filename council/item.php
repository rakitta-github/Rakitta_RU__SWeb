<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="/council/">Полезные советы</a></li>
            <li class="active"><? $APPLICATION->ShowTitle() ?></li>
        </ul>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 padding-none council-item">
                <?
                CModule::IncludeModule('iblock');
                $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "DETAIL_TEXT", "PROPERTY_*");
                $arFilter = Array("IBLOCK_ID" => IntVal(1), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "CODE" => $_GET['ELEMENT_CODE']);
                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
                while ($ob = $res->GetNextElement()) :
                    $arFields = $ob->GetFields();
                    $arProps = $ob->GetProperties();
                    ?>
                    <h2 class="col-xs-12 text-left">
                        <?= $arFields['NAME'] ?>
                        <? $APPLICATION->SetTitle($arFields["NAME"]) ?>
                    </h2>
                    <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="fs16 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?= $arFields['DETAIL_TEXT'] ?>
                    </div>
                <? endwhile; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <?
                    CModule::IncludeModule('iblock');
                    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
                    $arFilter = Array("IBLOCK_ID" => IntVal(1), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
                    while ($ob = $res->GetNextElement()) :
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        ?>
                        <div class="col-lg-12 rakitta-block council-right">
                            <a href="/council/<?= $arFields["CODE"] ?>/">
                                <h3><?= $arFields["NAME"] ?></h3>
                            </a>
                            <p><?= $arFields["PREVIEW_TEXT"] ?></p>
                            <a href="/council/<?= $arFields["CODE"] ?>/" class="btn-more btn-con">
                                <span>Подробнее </span>
                                <div></div>
                            </a>
                        </div>
                    <? endwhile ?>
                </div>

            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>