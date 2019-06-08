<?php
$title = 'Строительство под ключ';
$region = $_POST['REGION'];
$name = $_POST['NAME'];
$phone = $_POST['PHONE'];
$square = $_POST['SQUARE'];



$token ="898747172:AAF3SQI90rC1emrunaDbSm_DDDvgcBw9bp0";
$chat_id ="-353111510";
$arr = array(
    'Сайт' => $title,
    'Регион' => $region,
    'Площадь: ' => $square,
    'Имя: ' => $name,
    'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

//$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
