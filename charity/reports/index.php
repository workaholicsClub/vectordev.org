<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отчетность");
$APPLICATION->SetPageProperty("h2", "Отчетность");
$APPLICATION->SetPageProperty("h1", "Благотворительность");
?>

<?
Tools::IncludeModule();
Tools::IncludeModule('form');
$parts = CIBlockSection::GetList(array('SORT'=>'ASC'),array('ACTIVE'=>'Y','IBLOCK_ID'=>Config::IBLOCK_REPORTS));
$sParts = array(
  "reference" => array(),
  "reference_id" =>array()
);
$url = '';
while ($part = $parts->Fetch() ){
 if(!isset($_REQUEST['SECTION_CODE']) || $_REQUEST['SECTION_CODE'] == ''){
  $_REQUEST['SECTION_CODE'] = $part['CODE'];
 }
 $sParts['reference'][] = $part['NAME'];
 $sParts['reference_id'][] = $part['CODE'];
 $url = $part['LIST_PAGE_URL'];
}


?>
 <div class="page">
 <div class="group-reports">
   <div class="year-report select-parent year-report-select">
    <?=CForm::GetDropDownField('PART',$sParts,$_REQUEST['SECTION_CODE'],' class="js-select-pager" data-url="'.$url.'"');?>
   </div>
 <?$APPLICATION->IncludeComponent(
   "bitrix:news.list",
   "reports",
   Array(
     "AJAX_MODE" => "N",
     "IBLOCK_TYPE" => "charity",
     "IBLOCK_ID" => "22",
     "NEWS_COUNT" => "1000",
     "SORT_BY1" => "ACTIVE_FROM",
     "SORT_ORDER1" => "DESC",
     "SORT_BY2" => "SORT",
     "SORT_ORDER2" => "ASC",
     "FILTER_NAME" => "",
     "FIELD_CODE" => array("CODE"),
     "PROPERTY_CODE" => array("FILES"),
     "CHECK_DATES" => "Y",
     "DETAIL_URL" => "",
     "PREVIEW_TRUNCATE_LEN" => "",
     "ACTIVE_DATE_FORMAT" => "d.m.Y",
     "SET_TITLE" => "N",
     "SET_STATUS_404" => "N",
     "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
     "ADD_SECTIONS_CHAIN" => "N",
     "HIDE_LINK_WHEN_NO_DETAIL" => "N",
     "PARENT_SECTION" => "",
     "PARENT_SECTION_CODE" => $_REQUEST['SECTION_CODE'],
     "INCLUDE_SUBSECTIONS" => "Y",
     "CACHE_TYPE" => "A",
     "CACHE_TIME" => "36000000",
     "CACHE_FILTER" => "N",
     "CACHE_GROUPS" => "Y",
     "PAGER_TEMPLATE" => ".default",
     "DISPLAY_TOP_PAGER" => "N",
     "DISPLAY_BOTTOM_PAGER" => "Y",
     "PAGER_TITLE" => "Новости",
     "PAGER_SHOW_ALWAYS" => "Y",
     "PAGER_DESC_NUMBERING" => "N",
     "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
     "PAGER_SHOW_ALL" => "Y",
     "AJAX_OPTION_JUMP" => "N",
     "AJAX_OPTION_STYLE" => "Y",
     "AJAX_OPTION_HISTORY" => "N"
   ),
 false
 );?>
 </div> <!--/group-reports-->
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>