<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <ul class="nav nav-justified">
    <?
    $i = 0;
    $previousLevel = 0;
foreach ($arResult as $arItem):
    ?>
    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>
    <? if ($i++ > 0): ?>
        <li class="spacer"></li>
    <? endif ?>
    <li>
    <a href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]): ?>class="selected"<? endif ?>>
        <span><?= $arItem["TEXT"] ?></span>
    </a>
    <? if ($arItem["IS_PARENT"]): ?>
    <ul>
    <? endif ?>
    </li>
    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
<? endforeach ?>

    <? if ($previousLevel > 1): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>
    </ul>
<? endif ?>