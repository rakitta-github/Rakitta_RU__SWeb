<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
$APPLICATION->AddHeadString('<link href="http://' . $_SERVER['HTTP_HOST'] . str_replace('dealers/', '', $_SERVER['REQUEST_URI']) . '"  rel="canonical" />',true);

?>

<!--
<div style="margin-bottom:50px;">
<div class="contacts_red" style="width:140px;"><a href="/contacts/?arrFilter_ff%5BSECTION_ID%5D=294&set_filter=Y">���� � ������ "����������� ���"</a></div>
<div class="contacts_blue"><a href="/contacts/dealers/?arrFilter_ff%5BSECTION_ID%5D=265&set_filter=Y">������</a></div>
</div>
-->

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.filter",
	"yamaps",
	Array(
		"COMPONENT_TEMPLATE" => "yamaps",
		"IBLOCK_TYPE" => "ibtmedia",
		"IBLOCK_ID" => "21",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array("SECTION_ID",""),
		"PROPERTY_CODE" => array("",""),
		"LIST_HEIGHT" => "5",
		"TEXT_WIDTH" => "40",
		"NUMBER_WIDTH" => "5",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SAVE_IN_SESSION" => "Y",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PRICE_CODE" => array()
	)
);?>
<div style="display:none;">
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"yamaps_buled",
	Array(
		"COMPONENT_TEMPLATE" => "yamaps",
		"IBLOCK_TYPE" => "ibtmedia",
		"IBLOCK_ID" => "21",
		"NEWS_COUNT" => "20000",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array("ID","CODE","NAME","SORT","PREVIEW_TEXT",""),
		"PROPERTY_CODE" => array("EMAIL","ADDRESS","LON","WORKTIME","SITE","PHONE","LAT",""),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	)
);?><br>
 <br>
 <br>
 <br> </div>
 <?
 if (count($GLOBALS["arrFilter"])>0){
	//������� � ������
//	$GLOBALS["POINTS"][0]["COLOR"]="010101";
//	var_dump($GLOBALS["POINTS"]);
	//exit;
	//���������� � �����
 	$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "UF_LAT", "UF_LON", "UF_SCALE");
 	$rsResult = CIBlockSection::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 21, "ID"=>$GLOBALS["arrFilter"]["SECTION_ID"]), false, $arSelect);
	if($mD = $rsResult -> GetNext()){
		$MapFilter = Array(
	      'yandex_lat' => $mD["UF_LAT"],
	      'yandex_lon' => $mD["UF_LON"],
	      'yandex_scale' => $mD["UF_SCALE"],
	      'PLACEMARKS' => $GLOBALS["POINTS"],
		);

	}
//	var_dump($MapFilter["PLACEMARKS"]);

	$MapFilterS = serialize($MapFilter);


       /*
         "MAP_DATA" => serialize(
   array(
      'google_lat' => 54.70803636999584,
      'google_lon' => 20.582714080810547,
      'google_scale' => 16,
      'PLACEMARKS' => array(
         array(
            'TEXT' => "���\"1�-�������\", ����,  ���������� ��������, 261.",
            'LON' => 20.582714080810547,
            'LAT' => 54.70803636999584
			         ),
			      ),
			   )
			)
        */
    //��������� �����
 /*    	var_dump($MapFilter);
 	var_dump($GLOBALS["POINTS"]);*/
 }
 else
 {
 	//������� ����
 }

 $APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"dealers",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => $MapFilterS,
		"MAP_WIDTH" => "700",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array("ZOOM","MINIMAP","SCALELINE"),
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
		"MAP_ID" => "DVK_MAP"
	)
);?><br>
<br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"yamaps",
	Array(
		"COMPONENT_TEMPLATE" => "yamaps",
		"IBLOCK_TYPE" => "ibtmedia",
		"IBLOCK_ID" => "21",
		"NEWS_COUNT" => "20000",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array("ID","CODE","NAME","SORT","PREVIEW_TEXT",""),
		"PROPERTY_CODE" => array("EMAIL","ADDRESS","LON","WORKTIME","SITE","PHONE","LAT",""),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	)
);?><br>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>