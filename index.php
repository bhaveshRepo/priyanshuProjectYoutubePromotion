<?php
if (isset($_POST['lowName']) && isset($_POST['lowEmail']) && isset($_POST['lowNumber']) && isset($_POST['lowYoutube'])) {
 $name = $_POST['lowName'];
 $email = $_POST['lowEmail'];
 $number = $_POST['lowNumber'];
 $youtube = $_POST['lowYoutube'];
 $to = 'bsuthar713@gmail.com';
 $subject = "New Message on youtubePromotions.com";
 $body = '<html>
    <body>
     <h2>Title</h2>
     <br>
     <p>Name:<br>'.$name.'</p>
     <p>Email:<br>'.$email.'</p>
     <p>Number:<br>'.$number.'</p>
     <p>Youtube:<br>'.$youtube.'</p>

    </body>
   </html>';

//headers
$headers  = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
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

