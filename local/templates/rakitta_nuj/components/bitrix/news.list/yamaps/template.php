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
unset($arPoints);
unset($arrPhones);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>



	<div class="tab-content">
		<div class="tab-pane fade in active" id="retail">
			<div class="container padding-none">
				<div class="row plus full-img">
					<?foreach ($arResult["ITEMS"] as $k => $v) {
						If (!isset($v["DISPLAY_PROPERTIES"]["ROZNICA"])) continue;
						?>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
						<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
							<a href="<?=CFile::GetPath($v["FIELDS"]["DETAIL_PICTURE"]["ID"])?>" class="splash" data-splash-group="map-gallery">
								<img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]["ID"])?>">
								<div class="map-icon-zoom">
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
							<h3><?=$v["NAME"]?></h3>
							<p>
								<?=$v["PREVIEW_TEXT"]?>
							</p>
						</div>
						<a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
							<div>
							</div>
						</a>
					</div>
					<?}?>
				</div>

			</div>
		</div>
		<div class="tab-pane fade" id="wholesale">
			<div class="container padding-none">
				<div class="row plus full-img">
					<?foreach ($arResult["ITEMS"] as $k => $v) {
	//					var_dump($v["DISPLAY_PROPERTIES"]["OPT"]);exit;
					If (!isset($v["DISPLAY_PROPERTIES"]["OPT"])) continue;
					?>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
						<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
							<a href="<?=CFile::GetPath($v["FIELDS"]["DETAIL_PICTURE"]["ID"])?>" class="splash" data-splash-group="map-gallery">
								<img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]["ID"])?>" alt="">
								<div class="map-icon-zoom">
								</div>
							</a>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
							<h3><?=$v["NAME"]?></h3>
							<p>
								<?=$v["PREVIEW_TEXT"]?>
							</p>
						</div>
						<a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
							<div>
							</div>
						</a>
					</div>
					<?}?>
				</div>

			</div>
		</div>
	</div>


</div>
<?
  $GLOBALS["POINTS"] = $arPoints;
?>
