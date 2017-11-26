<?

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

//$smtpHost = 'mail.jintelware.com';
//$smtpPort = '587';

$to = 'jiw@jintelware.com';
$from = $email;

$message = $content;
$subject = $name. " Contacted You";
$headers = "From: notification@jintelware.com\r\n" .
           "Reply-To:".$from."\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers,"-f notification@jintelware.com");
?>