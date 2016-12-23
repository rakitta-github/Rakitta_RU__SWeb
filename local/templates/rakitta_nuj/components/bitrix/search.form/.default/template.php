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
$this->setFrameMode(true);?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 search-frame">
	<form action="<?=$arResult["FORM_ACTION"]?>" id="searchform">
	<input class="form-control" id="input" name="q" required="required" title="" type="search" value="">
	<button class="btn btn-default" type="button" name="s" onclick="$('#searchform').submit()"></button>
	</form>
</div>
