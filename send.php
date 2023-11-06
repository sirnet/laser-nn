<?
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['pnone'])) {
    $message .= 'Телефон: ' . $_POST['phone'] . ' ';
    $service = $POST['my-service'];
    $mailTo = "mail@mail.ru"; // Ваш e-mail
    $subject = "Письмо с сайта"; // Тема сообщения
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@site.ru <info@site.ru>\r\n"; //здесь указываем почту с доменом вашего сайта.
    if (mail($mailTo, $subject, $message, $headers, $service)) {
        echo "Спасибо, " . "мы свяжемся с вами в самое ближайшее время!";
    } else {
        echo "Сообщение не отправлено!";
    }
}
