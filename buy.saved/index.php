<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle("") ?><? $APPLICATION->SetTitle("Где купить") ?> <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/">Главная</a></li>
		<li class="active"><? $APPLICATION->ShowTitle() ?></li>
	</ul>
</div>
<div class="map-page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
				<h2 class="col-xs-12 col-sm-8 col-md-6 col-lg-5 text-left">Где купить</h2>
			</div>
		</div>
		<div class="row">
			<div class="btn-group city-btn">
 <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Выберите город <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Москва</a></li>
					<li><a href="#">Санкт-Петербург</a></li>
					<li><a href="#">Новосибирск</a></li>
					<li><a href="#">Барнаул</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="yandex-map ym" id="map">
				</div>
			</div>
		</div>
		<div class="row map-points">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ul class="nav nav-pills sale-tabs">
					<li class="active"><a href="#retail" data-toggle="tab">Розница</a></li>
					<li><a href="#wholesale" data-toggle="tab">Опт</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="retail">
						<div class="container padding-none">
							<div class="row plus full-img">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/stroitel logo.png">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Строитель</h3>
										<p>
											 г.&nbsp;Санкт-Петербург, пр. Наставников, д. 35, корп. 1, лит. А&nbsp;<br>
											 т.: (812) 449-39-11<br>
											 stroitel-spb.com
										</p>
									</div>
 <a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
									<div>
									</div>
 </a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/stroitel logo.png">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Строитель</h3>
										<p>
											 г. Колпино, ул. В. Слуцкой, д. 46/2&nbsp;<br>
											 т.: (812) 643-36-53<br>
											 stroitel-spb.com<br>
										</p>
									</div>
 <a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
									<div>
									</div>
 </a>
								</div>
							</div>
							<div class="row plus full-img">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/vinilism logo.png">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>ВинилСтройМаркет - офис продаж Север</h3>
										<p>
											 г. Москва, ул. Ижорская, д. 7 (территория комбината Меридиан)<br>
											 т.:&nbsp;(495) 995-92-52, (964) 626-70-01, (964) 626-70-02<br>
											 vinilsm.ru
										</p>
									</div>
 <a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
									<div>
									</div>
 </a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/vinilism logo.png">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>ВинилСтройМаркет - офис продаж Юг</h3>
										<p>
											 г. Москва,&nbsp;ТЦ Конструктор, МКАД 25 км (внешняя сторона), главный корпус, торговое место 1-1&nbsp;<br>
											 т.:&nbsp;(964) 626-70-14, (916) 949-40-28<br>
											 vinilsm.ru
										</p>
									</div>
 <a href="#" class="btn-more"> <span style="color: #39b778;">посмотреть на карте</span>
									<div>
									</div>
 </a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="wholesale">
						<div class="container padding-none">
							<div class="row plus full-img">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/photo-map-item.png" alt="">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Рекомендации по выбору клея</h3>
										<p>
											 Санкт-Петербург, ул. Комсомола, д.1-3 <br>
											 т.: 8 (911) 0000-000<br>
											 E-mail: <a href="mailto:adress@mag.mail">adress@mag.mail</a>
										</p>
									</div>
 <a href="#" class="btn-more"> Посмотреть на карте
									<div>
									</div>
 </a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/photo-map-item.png" alt="">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Рекомендации по выбору клея</h3>
										<p>
											 Санкт-Петербург, ул. Комсомола, д.1-3 <br>
											 т.: 8 (911) 0000-000<br>
											 E-mail: <a href="mailto:adress@mag.mail">adress@mag.mail</a>
										</p>
									</div>
 <a href="#" class="btn-more"> Посмотреть на карте
									<div>
									</div>
 </a>
								</div>
							</div>
							<div class="row plus full-img">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/photo-map-item.png" alt="">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Рекомендации по выбору клея</h3>
										<p>
											 Санкт-Петербург, ул. Комсомола, д.1-3 <br>
											 т.: 8 (911) 0000-000<br>
											 E-mail: <a href="mailto:adress@mag.mail">adress@mag.mail</a>
										</p>
									</div>
 <a href="#" class="btn-more"> Посмотреть на карте
									<div>
									</div>
 </a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 plus-block">
									<div class="col-xs-12 col-sm-5 col-md-12 col-lg-5 plus-icon">
 <a href="/assets/img/photo-map-item.png" class="splash" data-splash-group="map-gallery"> <img src="/assets/img/photo-map-item.png" alt="">
										<div class="map-icon-zoom">
										</div>
 </a>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 rakitta-block plus-text">
										<h3>Рекомендации по выбору клея</h3>
										<p>
											 Санкт-Петербург, ул. Комсомола, д.1-3 <br>
											 т.: 8 (911) 0000-000<br>
											 E-mail: <a href="mailto:adress@mag.mail">adress@mag.mail</a>
										</p>
									</div>
 <a href="#" class="btn-more"> Посмотреть на карте
									<div>
									</div>
 </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>