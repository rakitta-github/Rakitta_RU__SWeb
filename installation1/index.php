<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("") ?><? $APPLICATION->SetTitle("Монтаж") ?>
<div class="container install-page">
	<ul class="breadcrumb">
		<li><a href="/">Главная</a></li>
		<li class="active"><? $APPLICATION->ShowTitle() ?></li>
	</ul>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
			<h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Монтаж 3D панелей Rakitta</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 pull-right">
			 <?
                CModule::IncludeModule('iblock');
                $arSelect = ["ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_TEXT", "PROPERTY_*"];
                $arFilter = ["IBLOCK_ID" => IntVal(6), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_CODE" => $_GET['SECTION_CODE']];
                $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);
                $i = 1;
                while ($ob = $res->GetNextElement()) :
                    $arFields = $ob->GetFields();
                    $arProps = $ob->GetProperties();
                    ?>
			<div class="install-content">
				 <a class="anctor" bxid914472331"="" title="Код PHP: <?= $arFields['CODE'] ?>" name="<span id="><img title="Код PHP: <?= $arFields['CODE'] ?>" id="bxid960927270" class="bxhtmled-surrogate-dd" src="/bitrix/images/1.gif" data-bx-orig-src="/bitrix/images/1.gif"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>"&gt;</a>
				<h3><?= $arFields['NAME'] ?> </h3>
				 <?= $arFields['DETAIL_TEXT'] ?>
			</div>
			 <? endwhile ?>
		</div>
 <nav class="rakitta-block install-nav">
		<ul>
			 <?
                    CModule::IncludeModule('iblock');
                    $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
                    $arFilter = Array("IBLOCK_ID" => IntVal(6), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_CODE" => $_GET['SECTION_CODE']);
                    $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
                    $i = 1;
                    while ($ob = $res->GetNextElement()) :
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        ?>
			<li><a href="/installation/#<?= $arFields['CODE'] ?>"><?= $arFields['NAME'] ?></a></li>
			 <? endwhile ?>
		</ul>
 <a href="/files/instrukzia.pdf" download="" class="download-pdf-btn">Скачать PDF руководство</a> </nav>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>