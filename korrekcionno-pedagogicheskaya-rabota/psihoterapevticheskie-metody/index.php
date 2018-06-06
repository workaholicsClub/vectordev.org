<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "Психотерапевтические методы работы с детьми");
//$APPLICATION->SetPageProperty("h1", "Коррекционно-педагогическая работа с особыми детьми");
$APPLICATION->SetPageProperty("h2", "Психотерапевтические методы работы с детьми");
$_REQUEST["ELEMENT_CODE"] = empty($_REQUEST["ELEMENT_CODE"]) ? "izoterapiya" : $_REQUEST["ELEMENT_CODE"];
?>
<!-- <section class="content"> -->
<div class="page">
	<div class="content-information-help">
		<p>
			В работе с детьми очень важно использовать гибкие формы психотерапевтической работы. Дети, которые отстают в развитии, не умеют правильно выразить свои чувства, что затрудняет общение со взрослыми и сверстниками, нуждаются в эмоциональном толчке для успешного преодоления психологических барьеров.
		</p>
		<p>
			Довольно мощным фактором для «запуска» двигательной деятельности может стать потребность ребенка в самовыражении, самоутверждении. Для реализации этого дети широко используют творчество.
		</p>
		<p>
			<em>Арт-терапия – это лечение с помощью привлечения ребенка к искусству.&nbsp;</em>
		</p>
		<p>
			Арт-терапевтические методы позволяют детям с ограниченными возможностями здоровья найти силы, необходимые для повседневной жизни, а также помогают обогатить свой мир. Разнообразные занятия искусством способствуют развитию творческих способностей ребенка, формированию у него мировоззрения и позитивного мировосприятия.
		</p>
		<p>
			<em>Видов арт-терапии множество: песочная терапия, рисуночная терапия (изотерапия), сказкотерапия, игровая терапия, драматерапия, фототерапия, музыкотерапия, библиотерапия, куклотерапия.</em>
		</p>
		<p>
			Художественная деятельность является уникальным средством для эмоциональной и психологической разгрузки. Применение арт-терапии повышает познавательную активность детей, содействует сенсорному и двигательному развитию, концентрирует внимание. Кроме того, арт-терапия позволяет осуществлять более эффективное влияние на формирование эмоциональной сферы, побуждает к дальнейшему развитию компенсаторных свойств сохраненных функциональных систем.
		</p>
		<p>
			Необходимо подобрать те виды арт-терапии, которые конкретный ребенок способен выполнить и получить результат.
		</p>
		<p>
			<b>Результаты проведения арт-терапии:</b>
		</p>
		<ul>
			<li>создание положительного эмоционального настроя;</li>
			<li>облегчение процесса коммуникации со сверстниками, педагогами, взрослыми;</li>
			<li>возможность обратиться к тем реальным проблемам или фантазиям, которые по каким-либо причинам затруднительно обсуждать вербально;</li>
			<li>творческое самовыражение, развитие воображения, эстетического опыта, практических навыков изо-деятельности;</li>
			<li>повышение адаптивных способностей детей с ограниченными возможностями: снижение утомления, негативных эмоциональных состояний.</li>
		</ul>
		<p>
			Арт-терапия эффективна в коррекции различных отклонений и нарушений личностного развития. Данный метод использует здоровый потенциал личности, внутренние механизмы саморегуляции и исцеления. Занятия с помощью методов арт-терапии позволяют выстраивать отношения с ребенком на основе любви и взаимной привязанности и тем самым компенсировать их возможное отсутствие в социальной среде.
		</p>
		<p>
			Арт-терапия в работе с детьми, страдающими ДЦП, является наиболее эффективной в реабилитационном процессе. Применение методов арт-терапии помогает снятию эмоционального напряжения, развитию и гармонизации эмоциональной сферы ребенка, формированию позитивных установок, регулированию негативных эмоций, формированию саморегуляции, развитию творческих способностей. Правильно организованные занятия по арт-терапии помогают ребенку справиться со своими психологическими проблемами, восстановить его эмоциональное равновесие или устранить имеющиеся у него нарушения поведения, социализации, коммуникации.
		</p>
		<p>
			Арт-терапия позволяет получить доступ к переживаниям аутичных детей и корректно помочь им. Так как такие дети погружены в себя, любое вмешательство в их мир может вызвать сильную тревогу, а зачастую и агрессивные реакции. Поэтому только коммуникация на символическом уровне посредством визуальных образов, является исключением в работе с аутичными детьми.
		</p>
		<p>
			Безусловно, арт-терапия не является чудодейственной силой, способной полностью разрешить поведенческие, эмоциональные проблемы, социальные и социокультурные проблемы. Вместе с тем в арт-терапевтическом процессе субъект приобретает опыт позитивных индивидуально-личностных изменений.
		</p>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"programms",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("CODE"),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_SERVER['HIVE_ENV']?"35":"36",
		"IBLOCK_TYPE" => "helpfull_part",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>&nbsp;
	<h2><?=$APPLICATION->ShowProperty('h3');?></h2>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"programms",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(),
		"HEADER_CONTAINER" => "h3",
		"IBLOCK_ID" => $_SERVER['HIVE_ENV']?"35":"36",
		"IBLOCK_TYPE" => "helpfull_part",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("TEXT_IN_END","ADD_LINKS"),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"USE_PERMISSIONS" => "N"
	)
);?>
</div>
<!-- </section> -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>