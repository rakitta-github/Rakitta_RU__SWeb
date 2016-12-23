<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
 ?><? $APPLICATION->SetTitle("Контакты") ?> <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/">Главная</a></li>
		<li class="active"><? $APPLICATION->ShowTitle() ?></li>
	</ul>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
			<h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Контакты</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-4 contacts-col">
			<h3>Адреса:</h3>
			<div class="col-xs-12 col-sm-5 col-md-12 col-lg-12 rakitta-block contacts-block">
				<div>
					<h4>Главный офис:</h4>
					<p>
						 Санкт-Петербург, ул. Комсомола, д. 1-3 <br>
						 тел. +7 (812) 425-69-63<br>
 <a href="mailto:info@rakitta.ru">info@rakitta.ru</a>
					</p>
					<p>
						 9:30 - 18:00<br>
						 Сб&nbsp;и Вс&nbsp;выходной
					</p>
				</div>
 <a href="/files/offise.pdf" target="_blank" class="btn-more"> <span style="color: #39b778;">скачать схему проезда</span>
				<div>
				</div>
 </a>
			</div>
			<div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-12 col-md-offset-0 rakitta-block contacts-block">
				<div>
					<h4>Производство и склад:</h4>
					<p>
						 Санкт-Петербург, ул. Минеральная, д. 32
					</p>
					<p>
						Обращаем внимание, что загрузка автотранспорта производится с 9:30 до 16:00<br>
					</p>
					<p>
						 Сб&nbsp;и Вс выходной
					</p>
				</div>
 <a href="/files/sklad.pdf" target="_blank" class="btn-more"> <span style="color: #39b778;">скачать схему проезда</span>
				<div>
				</div>
 </a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 contacts-col">
			<h3>&nbsp;</h3>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="contacts-map ym" id="contactsMap">
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 contacts-col">
			<h3>Письмо директору:</h3>
			<div class="distr-form contacts-form">
				<?$APPLICATION->IncludeComponent(
					"nujin.ru:main.feedback",
					"",
					Array(
						"EMAIL_TO" => "d.fazanov@rakitta.ru",
						"EVENT_MESSAGE_ID" => array(),
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"REQUIRED_FIELDS" => array("NAME","EMAIL"),
						"USE_CAPTCHA" => "Y",
						"FORM_NAME" => "со страницы контактов"
					)
				);?>

			</div>
		</div>
	</div>
</div>
 <br>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>