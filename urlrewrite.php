<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/products/([\\w,-]+)/([\\w,-]+)/#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2",
		"ID" => "",
		"PATH" => "/products/item.php",
	),
	array(
		"CONDITION" => "#^/products/([\\w,-]+)/#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/products/section.php",
	),
	array(
		"CONDITION" => "#^/katalog/([\\w,-]+)/([\\w,-]+)/#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2",
		"ID" => "",
		"PATH" => "/katalog/item.php",
	),
	array(
		"CONDITION" => "#^/katalog/([\\w,-]+)/#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/katalog/section.php",
	),
	array(
		"CONDITION" => "#^/council/([\\w,-]+)/#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/council/item.php",
	),
);

?>