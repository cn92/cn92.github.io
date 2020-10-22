<?PHP

$to_email = "riskcyan@gmail.com";
$subject = "Testing PHP thing";
$body = "I love you <3";
$headers = "From: Testing WebSite Form";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed...";
}


?>