<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$lnk = $arItem["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"];
?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	<div class="rakitta-block">
		<a href="<?=$lnk?>"  target=_blank" >
			<img alt="<?=$arItem["NAME"]?>" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="wide-picture"> </a>
			<a href="<?=$lnk?>"  target=_blank" >
			<h3 class="mbt20"><?=$arItem["NAME"]?></h3>
		</a>
		<hr class="green-line">
		<p>
			<a href="<?=$lnk?>"  target=_blank" >Скачать</a>
		</p>
	</div>
</div>
<?endforeach;?>
