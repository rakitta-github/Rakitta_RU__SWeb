<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .menucart {
        color: White;
        font-size: 24px;
    }
    .menucart:hover {
        color: Red;
    }
    .tooltip{
        width:90px;
    }
</style>
    <script>
        $( function() {
            $( ".IMToolTip" ).tooltip({
            });
        } );
    </script>
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
        <li class="spacer"></li>
        <li>
            <a href="http://rakitta.online" target="_blank">
                <i class="fa fa-shopping-cart menucart IMToolTip1" title="В интернет-магазин"></i>
            </a>
        </li>
    <? if ($previousLevel > 1): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>
    </ul>
<? endif ?>