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

//var_dump($arResult);exit;
?>



	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
				<h2 class="col-xs-12 col-sm-8 col-md-8 col-lg-8 partners-h2 text-left">Анкета для потенциальных
					дистрибьюторов:</h2>
			</div>
		</div>
		<?if(!empty($arResult["ERROR_MESSAGE"]))
		{?><br />
			<?foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{
			?><br /><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
		}
		?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="distr-form">
<?=bitrix_sessid_post()?>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-4 form-group">
						<label for="fio">ФИО контактного лица</label>
						<input type="text" class="form-control" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"  id="fio">
					</div>
					<div class="col-sm-4 form-group">
						<label for="occupation">Должность</label>
						<input type="text" class="form-control" name="par[occupation]" id="occupation">
					</div>
					<div class="col-sm-4 form-group">
						<label for="org">Организация</label>
						<input type="text" class="form-control" name="par[org]" id="org">
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<label for="address">Адрес центрального офиса</label>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="form-group">
					<input type="text" class="form-control" name="par[address]" id="address">
				</div>
				<div class="form-group">
					<label for="phone">Телефон</label>
					<input type="text" class="form-control" name="par[phone]" id="phone">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" class="form-control"  name="user_email" id="email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
				</div>
				<div class="form-group">
					<label for="site">Сайт</label>
					<input type="text" class="form-control" name="par[site]" id="site">
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="row">
					<div class="form-group clearfix">
						<div class="col-sm-8  text-right">
							<label for="part">
								Доля потолочных и стеновых панелей (%) в общем объеме выручки компании за прошлый год
							</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="par[part]" id="part">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group clearfix">
						<div class="col-sm-8  text-right">
							<label for="shops">Сколько собственных розничных точек имеет компания</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="par[shops]" id="shops">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group clearfix">
						<div class="col-sm-8  text-right">
							<label for="distr">Сколько оптовых посредников имеет компания</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="par[distr]" id="distr">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group clearfix">
						<div class="col-sm-8  text-right">
							<label>Наличие собственного склада</label>
						</div>
						<div class="col-sm-2">
							<input type="button" class="form-control" name="par[stock_true]" id="stock_true" value="да">
						</div>
						<div class="col-sm-2">
							<input type="button" class="form-control" name="par[stock_false]" id="stock_false" value="нет">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group clearfix">
						<?if($arParams["USE_CAPTCHA"] == "Y"):
							?>
							<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
						<div class="col-xs-12 col-sm-4">
								<div class="mf-captcha">
									<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
								</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<input class="form-control" type="text" name="captcha_word"
								   placeholder="Введите код">
						</div>
						<?endif;?>
						<div class="col-xs-12 col-sm-4 submit-btn">
							<input type="submit" value="Отправить" class="form-control" name="submit">
						</div>
					</div>
				</div>
			</div>
		</div>

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	
</form>
</div>
