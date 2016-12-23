<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><? $APPLICATION->SetTitle("О компании") ?>
<div class="container fs-page-16">
	<ul class="breadcrumb">
		<li><a href="/">Главная</a></li>
		<li class="active"><? $APPLICATION->ShowTitle() ?></li>
	</ul>
	<div class="clearfix">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-none">
			<h2 class="text-left">О компании</h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
			<div class="row">
 <img alt="o-kompanii-p.png" src="/upload/medialibrary/bfe/o_kompanii_p.png" title="o-kompanii-p.png" class="wide-picture pba">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
			<p>
				 Производственная компания «Ракитта»&nbsp;(Санкт-Петербург) специализируется на выпуске и продаже под собственной зарегистрированной торговой маркой Rakitta декоративных облицовочных 3D панелей из пластика. Этот вид строительных отделочных материалов используется для оформления стен и потолков внутри помещений.
			</p>
			<p>
				 В основе производственного процесса изготовления 3D панелей Rakitta лежит технология термовакуумной формовки исходного листового материала.&nbsp;Вся выпускаемая продукция сертифицирована.
			</p>
			<p>
				 Отличительной чертой нашего производства является тот факт, что оно проектировалось и строилось специально с целью изготовления облицовочных 3D панелей из пластика. Используемое оборудование и технологическая оснастка были изготовлены единым комплексом, что позволяет добиваться в процессе изготовления продукции всегда высокого и стабильного качества, сохраняя при этом доступный уровень цен на 3D панели Rakitta.
			</p>
			<p>
				 Наша продукция предназначена для дизайнеров, архитекторов, строителей и обычных покупателей. Мы работаем для тех, кто хочет оригинально, и в то же время красиво, быстро и не дорого оформить потолок или стены в офисе, дома или в любом другом помещении.
			</p>
			<p>
				 Листовой пластик, из которого делаются 3D панели Rakitta, производится ведущими российскими и европейскими компаниями, что гарантирует его высокое качество и соблюдение всех экологических норм и требований.
			</p>
			<p>
				 Разрабатывая рисунки&nbsp;3D панелей Rakitta, мы привлекали опытных дизайнеров, специализирующихся на оформлении интерьеров различных помещений - от квартир и загородных домов до ресторанов и бизнес-центров. Наши 3D панели отражают как модные тренды, так и классические мотивы. При этом они всегда элегантны и помогают быстро и без особых затрат придать стильный и неповторимый облик любому помещению.&nbsp;
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 myslick-about">
			 <?
                CModule::IncludeModule('iblock');
                $arSelect = Array("ID", "NAME", "IBLOCK_ID", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_*");
                $arFilter = Array("IBLOCK_ID" => IntVal(5), "SECTION_ID" => intval(8), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, Array("nPageSize" => 50), $arSelect);
                $i = 1;
                while ($ob = $res->GetNextElement()) :
                    $arFields = $ob->GetFields();
                    $arProps = $ob->GetProperties();
                    ?> <img alt="<?= $arFields['NAME'] ?>" src="<?= CFile::GetPath($arFields['PREVIEW_PICTURE']) ?>
			 "> <? endwhile ?>
		</div>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>