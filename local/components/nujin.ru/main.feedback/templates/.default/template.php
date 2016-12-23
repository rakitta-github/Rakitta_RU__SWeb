<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
<div class="mfeedback">
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<label for="user_name">Ваше имя:</label><span class="mf-req">*</span>
		<input class="form-control" id="name" name="user_name" type="text">
		<label for="user_email">Телефон / e-mail:</label><span class="mf-req">*</span>
		<input class="form-control" id="phoneORemail" name="user_email" type="text">
		<div class="form-group">
			<label for="message">Текст сообщения:</label>
			<textarea class="form-control" id="message" rows="3" name="MESSAGE" ><?=$arResult["MESSAGE"]?></textarea>
		</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="form-group">
						<div class="col-xs-6 col-md-6 col-md-6 col-lg-6">
							<span>
								<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="120" height="40" alt="CAPTCHA"> </span>
						</div>
						<div class="col-xs-6 col-md-6 col-md-6 col-lg-6">
							<input name="captcha_word" type="text" placeholder="Введите код" style="width: 100%;    float: right;
    margin-right: 20px;">
						</div>
					</div>
				</div>
			</div>
		</div>

	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" style="float: right;
    margin-right: 20px;">
</form>
</div>