<?include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("sale");

if ($_REQUEST['id'] && CModule::IncludeModule("catalog")){
    Add2BasketByProductID($_REQUEST['id'], 1, array("DELAY" => "Y"), array());
}

//DELAY => Y - отложенные N - в корзину
