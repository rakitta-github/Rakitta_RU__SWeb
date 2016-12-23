<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><?
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "DETAIL_TEXT", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => IntVal(3), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "CODE" => $_GET['ELEMENT_CODE']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
while ($ob = $res->GetNextElement()) :
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();
    ?>
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
		 <?
            CModule::IncludeModule('iblock');
            $arFilter = array('IBLOCK_ID' => 3, "CODE" => $_GET['SECTION_CODE']);
            $rsSect = CIBlockSection::GetList(array(), $arFilter);
            while ($arSect = $rsSect->GetNext()) :
                ?>
		<ul class="breadcrumb">
			<li><a href="/">Главная</a></li>
			<li><a href="/products/">Каталог продукции Rakitta </a></li>
			<li><a href="/products/<?= $arSect['CODE'] ?>/"><?= $arSect['NAME'] ?></a></li>
			<li class="active"><?= $arFields['NAME'] ?></li>
		</ul>
		 <? endwhile ?>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
			<h2 class="text-left"><?= $arFields['NAME'] ?> 3D панель облицовочная</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-none carousel slide pba" id="carousel-palermo" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
 <a href="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>" class="splash" target="_blank"> <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>
					 " class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> </a>
				</div>
				 <? foreach ($arProps['IMG_DETAIL']['VALUE'] as $img_detail) : ?>
				<div class="item">
 <a href="<?= CFile::GetPath($img_detail) ?>" class="splash"> <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($img_detail) ?>
					 " class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> </a>
				</div>
				 <? endforeach; ?>
			</div>
 <a href="#carousel-palermo" class="left carousel-control palermo-slider" data-slide="prev"></a> <a href="#carousel-palermo" class="right carousel-control palermo-slider" data-slide="next"></a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 item-description">
			<h4 class="palermo-list-title">Место крепления панелей:</h4>
			 <?= $arFields['DETAIL_TEXT'] ?>
			<?
			foreach($arProps["PARAMETRS"]["VALUE"] as $k=>$v) {
				$ss = $arProps["PARAMETRS"]["DESCRIPTION"][$k];
				$ss = str_replace(" ","&nbsp;",$ss);
				?>
			<p><table cellpadding="0" cellspacing="0" style="width:100%;" border="0">
				<tr>
					<td><?=$ss?></td>
					<td style="width:100%; border-bottom:1px dotted Gray;"></td>
					<td style="color: #00985f;"><b><?=$v?></b></td>
				</tr>
			</table></p>
			<?}?>
			<br />
			<a href="/installation/" class="green-link">Инструкция по монтажу</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row panel-3d-slider">
		<div class="col-md-12">
			<div class="row">
				<div id="carousel-panel-3d">
					<!-- Содержимое слайдов --> <? $i = 0 ?>
					<?
					foreach ($arProps['IMG_INTERIOR']['VALUE'] as $img_interior) : ?>
						<div class="item<? if ($i++ == 0) echo ' active' ?>">
							<div class="container padding-none">
								<img class="col-xs-12 col-sm-12 col-md-12 col-lg-12" src="<?= CFile::GetPath($img_interior) ?>" alt="">
							</div>
						</div>
					<? endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>
<? endwhile ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>