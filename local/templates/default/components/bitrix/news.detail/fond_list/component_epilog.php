<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$APPLICATION->AddChainItem($arResult['NAME']);
$APPLICATION->SetPageProperty('h1',$arResult['NAME']);
$APPLICATION->SetPageProperty('title',$arResult['NAME']);
?>