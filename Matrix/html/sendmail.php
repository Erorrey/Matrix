$brand = $_POST['brand'];
$model = $_POST['model'];
$number = $_POST['number'];
$brand = htmlspecialchars($brand);
$model = htmlspecialchars($model);
$number = htmlspecialchars($number);
mail("mexq228@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n");