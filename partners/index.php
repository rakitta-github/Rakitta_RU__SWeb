<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Партнерам") ?>
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/">Главная</a></li>
		<li class="active"><? $APPLICATION->ShowTitle() ?></li>
	</ul>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
			 <a class="anctor" name="vantages"></a>
			<h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Преимущества работы</h2>
		</div>
	</div>
</div>
<div class="container-fluid padding-none">
	<div class="container">
		<div class="slide" id="carousel-partners">
			 <?
                CModule::IncludeModule('iblock');
                $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "DETAIL_PICTURE", "PREVIEW_TEXT");
                $arFilter = Array("IBLOCK_ID" => IntVal(5), "SECTION_ID" => intval(7), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
                $i = 1;
                while ($ob = $res->GetNextElement()) :
                    $arFields = $ob->GetFields();
                    $arProps = $ob->GetProperties();
                    ?>
					<div class="item<? if ($i++ == 1) echo ' active'; ?>">
						<div class="container-fluid padding-none">
							 <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']) ?>">

							<div class="carousel-caption partners-slider-content">
								<?= $arFields['PREVIEW_TEXT'] ?>
							</div>
						</div>
					</div>
			 <? endwhile ?>
		</div>
	</div>
	<a name="form"></a>
	<?$APPLICATION->IncludeComponent(
		"nujin.ru:main.feedback",
		"partners",
		Array(
			"EMAIL_TO" => "marketing@rakitta.ru",
			"EVENT_MESSAGE_ID" => array(),
			"OK_TEXT" => "Спасибо, ваше сообщение принято.",
			"REQUIRED_FIELDS" => array("NAME","EMAIL"),
			"USE_CAPTCHA" => "Y",
			"FORM_NAME" => "со страницы партнёров"
		)
	);?>
	<div class="container">

		<div class="row panel-3d">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				 <a class="anctor" name="materials"></a>
				<h2 class="col-xs-12 col-sm-8 col-md-8 col-lg-8 partners-h2 text-left">Рекламные материалы:</h2>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"reklam_mater",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE",""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "8",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("","FILE"),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "NAME",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC"
				)
			);?>
		</div>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>