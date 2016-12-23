<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php") ?>
<? $APPLICATION->SetTitle("Каталог продукции Rakitta") ?>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active"><? $APPLICATION->ShowTitle() ?></li>
        </ul>
        <div class="row how-to-watch">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none"><h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Каталог продукции Rakitta</h2></div>
            <?
            CModule::IncludeModule('iblock');
            $arFilter = array('IBLOCK_ID' => 3);
            $rsSect = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter);
            while ($arSect = $rsSect->GetNext()) :
                ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="rakitta-block green-border-block">
                        <a href="/products/<?= $arSect['CODE'] ?>/">
                            <img alt="" src="<?= CFile::GetPath($arSect['PICTURE']) ?>">
                            <h3 class="green mbt30"><?= $arSect['NAME'] ?></h3>
                        </a>
                    </div>
                </div>
            <? endwhile ?>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>