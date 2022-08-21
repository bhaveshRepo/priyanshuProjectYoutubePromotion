<?php
if (isset($_POST['Name']) && isset($_POST['Number'])){


    $name = $_POST['Name'];
    $number = $_POST['Number'];
    $to = 'upromotions047@gmail.com';
    $subject = "New Message on youtubePromotions.com";
    $body = '<html>
    <body>
     <h2>Title</h2>
     <br>
     <p>Name:<br>'.$name.'</p>
     <p>Email:<br>'.$number.'</p>

     
    </body>
    </html>';

    $headers  = "From: ".$name." <".$number.">\r\n";
$headers .= "Reply-To: ".$number."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";



//send
$send = mail($to, $subject, $body, $headers);
if ($send) {
 echo '<br>';
 echo "Success. Thanks for Your Message.";
} else {
 echo 'Error.';
}
}
?>

