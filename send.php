<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- кодировка сайта -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- разрешаем отображение на смартфонах -->
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon"> <!-- устанавливаем фавикон -->
    <link rel="stylesheet" href="styles/bootstrap.css"> <!-- подключаем Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap-reboot.css"> <!-- подключаем Bootstrap-reboot -->
    <link rel="stylesheet" href="styles/bootstrap-grid.css"> <!-- подключаем Bootstrap-Grid -->
    <link rel="stylesheet" href="styles/vivify.min.css"> <!-- подключаем библиотеку анимации -->
    <link rel="stylesheet" href="styles/style.css"> <!-- подключаем стиль сайта -->
    <title>Спасибо!</title> <!-- название вкладки -->
</head>
<body style="background-image: url(background.jpg);">
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['first_name']) and !empty($_POST['email']) and !empty($_POST['message'])){

        $to = "my.aist.studio@mail.ru";; // Здесь нужно написать e-mail, куда будут приходить письма
        $from = $_POST['email']; 
        $first_name = $_POST['first_name'];
        $phone = $_POST['phone'];
        $subject = "Форма отправки сообщений с сайта";
		$message = "Новая заявка на запись от " . $first_name . "(" . $from . ")." . "\n\n" . "Номер телефона: " . $_POST['phone'] . "\n\n" . "Сообщение: " . $_POST['message'];
        $headers = "From:" . $from;

        mail($to,$subject,$message,$headers);

        $to2 = $_POST['email']; // Здесь нужно написать e-mail, куда будут приходить письма
        $from2 = "my.aist.studio@mail.ru";
        $first_name = $_POST['first_name'];
        $phone2 = $_POST['phone'];
        $subject2 = "Форма отправки сообщений с сайта";
        $message2 = "Здравствуйте " . $first_name . ", Ваша заявка в АИСТ отправлена! В ближайшее время с вами свяжется один из представителей нашей Ассоциации. Спасибо за обратную связь!";
        $headers2 = "From:" . $from2;

        mail($to2,$subject2,$message2,$headers2);

        echo "<div class='backSait'>Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
        echo "<br><a href='http://test.u0631969.isp.regruhosting.ru/'>Вернуться на сайт.</a></div>";
    }
}else{
    echo "<div class='backSait'>Ошибка! Что-то введено не правильно!</div>";
}
?>
</body>
</html>