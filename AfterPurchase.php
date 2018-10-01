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
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
<<<<<<< HEAD
    $mail->Host = "host17.sherlockhost.co.uk";
=======
    $mail->Host = "mail.liriz-jewellery.com";
>>>>>>> 72ac197c9fdb83390c60515003273ec600dbe3a6
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;
    $mail->Username = "lirizjewellery@liriz-jewellery.com";
    $mail->Password = "Roihagag123";
<<<<<<< HEAD
    $mail->From = "lirizjewellery@liriz-jewellery.com"; 
    $mail->FromName = "Liri";
    $mail->Sender = "lirizjewellery@liriz-jewellery.com";
    $mail->addAddress($_POST["Email"], $_POST["Email"]);
=======
    $mail->From = "lirizjewelry@gmail.com"; 
    $mail->FromName = "Liri";
    $mail->Sender = "lirizjewellery@liriz-jewellery.com";
    $mail->addAddress($_POST["Email"], $_POST["Email"]);
    // Sending LIRI a copy of the message

>>>>>>> 72ac197c9fdb83390c60515003273ec600dbe3a6
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Subject = "Liriz - קנייה";

    $txt = ":תודה שקנית מהאתר שלנו, הפרטים שלך שקיבלנו הם\n";
    $address = $_POST["Address"];
    $mikod = $_POST["Mikod"];
    $phone = $_POST["Phone"];
    $pictureCode = $_POST["PictureCode"];
    $paymentAmount = $_POST["PaymentAmount"];
    $name = $_POST["Name"];
    $txt .= "כתובת:" . $address . "\n";
    $txt .= "מספר טלפון:" . $phone . "\n";
    $txt .= "מיקוד:" . $mikod . "\n";
    $txt .= "שם מלא:" . $name . "\n";
    $txt .= "מזהה שרשרת: " . $pictureCode . "\n";
    $txt .= "סכום חיוב: " .$paymentAmount . " שקלים \n";
    $txt .= "אם הפרטים לא נכונים יש לשלוח מייל אל - lirizjewelry@gmail.com עד 12 שעות מזמן הקנייה.\n";
    $txt .= "לפניות טכניות : 0527345543\n";
    $txt .= "לפניות בנוגע למוצרים : 0546641822\n";
    $mail->CharSet = 'utf-8';
    $mail->Body = $txt;

<<<<<<< HEAD
    if(!$mail->Send()) { 
    echo 'Message was not sent.'; 
    echo 'Mailer error: ' . $mail->ErrorInfo; 
    } else { 
    echo 'Message has been sent.'; 
    } 

    $to = $_POST["Email"];
    $subject = "Liriz - קנייה";

    $headers = "From: liriz-jewelry.com" . "\r\n" ;
=======
    $mail->Send();
    
    $mail->ClearAddresses();
    $mail->addAddress("lirizjewelry@gmail.com", "lirizjewelry@gmail.com");
    $mail->Send();
>>>>>>> 72ac197c9fdb83390c60515003273ec600dbe3a6

    ?> 

</section>

</body>
</html>