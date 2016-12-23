<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("987");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"",
	Array(
		"PAGE" => "#SITE_DIR#search/",
		"USE_SUGGEST" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>