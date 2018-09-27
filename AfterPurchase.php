<!DOCTYPE html>
<html>
    <head>>
    <link rel="stylesheet" href="css/phpstyle.css">
    <title>Liriz Jewellery</title>
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
    $mail->SMTPDebug = 1;
    $mail->Debugoutput = 'html';
    $mail->Host = "mail.liriz-jewellery.com";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;
    $mail->Username = "lirizjewellery@liriz-jewellery.com";
    $mail->Password = "Roihagag123";
    $mail->From = "lirizjewelry@gmail.com"; 
    $mail->FromName = "Liri";
    $mail->Sender = "lirizjewellery@liriz-jewellery.com";
    $mail->addAddress($_POST["Email"], $_POST["Email"]);
    // Sending LIRI a copy of the message

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Subject = "Liriz - קנייה";

    $txt = ":תודה שקנית מהאתר שלנו, הפרטים שלך שקיבלנו הם";
    $address = $_POST["Address"];
    $mikod = $_POST["Mikod"];
    $phone = $_POST["Phone"];
    $pictureCode = $_POST["PictureCode"];
    $paymentAmount = $_POST["PaymentAmount"];
    $txt .= "כתובת:" . $address . "\n";
    $txt .= "מספר טלפון:" . $phone . "\n";
    $txt .= "מיקוד:" . $mikod . "\n";
    $txt .= "מספר שרשרת: " . $pictureCode . "\n";
    $txt .= "סכום חיוב: " .$paymentAmount . "שקל \n";
    $txt .= "אם הפרטים לא נכונים יש לשלוח מייל בתגובה לזה עד 12 שעות מזמן הקנייה.";
    $mail->CharSet = 'utf-8';
    $mail->Body = $txt;

    if(!$mail->Send()) { 
    echo 'Message was not sent.'; 
    echo 'Mailer error: ' . $mail->ErrorInfo; 
    } else { 
    echo 'Message has been sent.'; 
    } 
    
    $mail->ClearAddresses();
    $mail->addAddress("liri.girafi@gmail.com", "liri.girafi@gmail.com");
    if(!$mail->Send()) { 
    echo 'Message was not sent.'; 
    echo 'Mailer error: ' . $mail->ErrorInfo; 
    } else { 
    echo 'Message has been sent.'; 
    } 

    ?> 

</section>

</body>
</html>