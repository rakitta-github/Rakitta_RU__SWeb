<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
unset($arResult["ITEMS"]["SECTION_ID"]["LIST"][0]);

foreach($arResult["ITEMS"]["SECTION_ID"]["LIST"] as $key=>$val) {
	$arResult["ITEMS"]["SECTION_ID"]["LIST"][$key]=trim(str_replace(".", "", $val));
	//if ($key==294) unset($arResult["ITEMS"]["SECTION_ID"]["LIST"][$key]);
}
//var_dump($arResult["ITEMS"]);exit;

?>