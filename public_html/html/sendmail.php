<?php
$token = "7701517835:AAGQJSJJ7UDaLdWuji2p3jjDX0GsUqjd1Z8";
$chat_id = "-1002310306028";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $number = $_POST['number'];

    $arr = array(
        'Бренд:' => $brand,
        'Модель:' => $model,
        'Номер: ' => $number
    );

    $txt = '';
    foreach ($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        $response = ['success' => true, 'message' => 'Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.'];
    } else {
        $response = ['success' => false, 'message' => 'Что-то пошло не так. ПОпробуйте отправить форму ещё раз.'];
    }

    header('Content-type: application/json');
    echo json_encode($response);
    exit;
}
?>