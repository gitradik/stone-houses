<?php
$title = 'Строительство под ключ';
$region = $_POST['REGION'];
$name = $_POST['NAME'];
$phone = $_POST['PHONE'];
$square = $_POST['SQUARE'];
$location = $_POST['LOCATION'];



$chat_id = '-331677139';
$token = '875271793:AAHSf-TjwiRy4AOizyPq22GtAPKC15PZc6w';

$arr = array(
    'Сайт' => $title,
    'Регион' => $region,
    'Площадь: ' => $square,
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Локация' => $location,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
