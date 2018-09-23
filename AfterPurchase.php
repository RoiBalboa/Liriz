<!DOCTYPE html>
<html>
    <head>>
    <link rel="stylesheet" href="css/phpstyle.css">
    <title>Liriz Jewellry</title>
    </head>
<body>

<section id="gallery">
    <h1 style="letter-spacing:8px;" >תודה שקנית, מייל נשלח אליך</h1>
    <a href="index.html">בחזרה אל הדף הראשי</a>
    <?php
    $to = $_POST["Email"];
    $subject = "Liriz - קנייה";
    $txt = ":תודה שקנית מהאתר שלנו, הפרטים שלך שקיבלנו הם";
    $address = $_POST["Address"];
    $mikod = $_POST["Mikod"];
    $phone = $_POST["Phone"];
    $txt .= "כתובת:" . $address . "\n";
    $txt .= "מספר טלפון:" . $phone . "\n";
    $txt .= "מיקוד:" . $mikod . "\n";
    $txt .= "אם הפרטים לא נכונים יש לשלוח מייל בתגובה לזה עד 12 שעות מזמן הקנייה.";
    $headers = "From: liriz-jewelry.com" . "\r\n" ;

    mail($to,$subject,$txt,$headers);
    // mail("liri.girafi@gmail.com",$subject,$txt,$headers);
    ?> 

</section>

</body>
</html>