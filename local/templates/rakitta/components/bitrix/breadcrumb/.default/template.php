<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;
if (empty($arResult))
    return "";
$strReturn = '';
$strReturn = '<div class="container"><ul class="breadcrumb"><li><a href="/">Главная</a></li>';
$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="url">' . $title . '</a>';
    } else {
        $strReturn .= '<li class="active">' . $title . '</li>';
    }
}
$strReturn .= '</ul></div>';
return $strReturn;
