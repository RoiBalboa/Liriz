<!DOCTYPE html>
<html>
    <head>>
    <link rel="stylesheet" href="css/phpstyle.css">
    <title>Liriz Jewellry</title>
    </head>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    ?>
<body>

<section id="gallery">
    <h1 style="letter-spacing:8px;" >תודה שקנית, מייל נשלח אליך</h1>
    <a href="index.html">בחזרה אל הדף הראשי</a>
    <?php

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "lirizjewelry@gmail.com";
    $mail->Password = "Roihagag123";
    $mail->setFrom('lirizjewelry@gmail.com', 'Liri');
    $mail->addAddress($_POST["Email"], $_POST["Email"]);

    $mail->Subject = "Liriz - קנייה";

    $txt = ":תודה שקנית מהאתר שלנו, הפרטים שלך שקיבלנו הם";
    $address = $_POST["Address"];
    $mikod = $_POST["Mikod"];
    $phone = $_POST["Phone"];
    $txt .= "כתובת:" . $address . "\n";
    $txt .= "מספר טלפון:" . $phone . "\n";
    $txt .= "מיקוד:" . $mikod . "\n";
    $txt .= "אם הפרטים לא נכונים יש לשלוח מייל בתגובה לזה עד 12 שעות מזמן הקנייה.";
    $mail->CharSet = 'utf-8';
    $mail->Body = $txt;

    $mail->send();

    $to = $_POST["Email"];
    $subject = "Liriz - קנייה";

    $headers = "From: liriz-jewelry.com" . "\r\n" ;

    //mail($to,$subject,$txt,$headers);
    // mail("liri.girafi@gmail.com",$subject,$txt,$headers);
    ?> 

</section>

</body>
</html>