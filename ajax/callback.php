<?php 
ob_start();
  require_once($_SERVER["DOCUMENT_ROOT"]."/includes/tools.php");
$tmp = ob_get_contents();
ob_end_clean();


if(!preg_match('/^[a-zA-Zа-яА-Я0-9-].*$/', $_POST['FIO'])){
    $alert = 'Укажите Ваше имя!';
    Tools::JSONResponse(array(1, $alert));
}
if(!preg_match('/^[a-zA-Zа-яА-Я0-9-()\+].*$/', $_POST['PHONE'])){
    $alert = 'Укажите Ваш контактный телефон!';
    Tools::JSONResponse(array(1, $alert));
}

CModule::IncludeModule("iblock");
$el = new CIBlockElement;

$PROP = array();
$PROP['PHONE'] = $_POST['PHONE']; 
$PROP['FIO'] = $_POST['FIO']; 
//$PROP['MESSAGE'] = array('VALUE'=>array('TYPE'=>'TEXT','TEXT'=>$_POST['TEXT']));

$arLoadProductArray = Array(
  "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
  "IBLOCK_ID"      => Config::IBLOCK_CALLBACK,
  "PROPERTY_VALUES"=> $PROP,
  "ACTIVE"         => "N",           // активен
  "PREVIEW_TEXT" => $_POST['TEXT'],
  "NAME"           => "Заказ звонка - ".$_POST['FIO']
  );

if($PRODUCT_ID = $el->Add($arLoadProductArray)){
  
  $arEventFields = array(
    "USER_PHONE"          => $_POST['PHONE'],
    "USER_NAME"           => $_POST['FIO'],
    "USER_TEXT"           => $_POST['TEXT'],
    "EMAIL_TO"      => Tools::GetValue('CALLBACK_EMAIL')
    );
  
  
  Tools::SendMailBitrix("CALLBACK_FORM",$arEventFields);
  
  $alert = Tools::GetValue('CALLBACK_REQUEST');
  Tools::JSONResponse(array(0, $alert));
}
else{
  $alert = "Error: ".$el->LAST_ERROR;
  Tools::JSONResponse(array(0, $alert,'alert'));
}