<?php
$name = $_POST['name'];
$email = $_POST['email']; 
$comments = $_POST['comments'];

// Message to customer
$to = $email;

$subject = "Thank You for Your Feedback";

$message = "Dearest " . $name . ",";
$message .= "\r\n";
$message .= "\r\n";
$message .= "Worldwide Global Corporation thanks you for taking the time to reach out to us.";
$message .= "\r\n";
$message .= "\r\n";
$message .= "A representative from our call center in Outer Mongolia will be in touch with you as soon as phone service becomes available in that country.";
$message .= "\r\n";
$message .= "\r\n";
$message .= "Bestest regards,";
$message .= "\r\n";
$message .= "The Worldwide Global Corporation Customer Care Team";

$headers = 'From: support@nelsonricardo.com' . "\r\n" .
    'Reply-To: support@nelsonricardo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// Message to support team
$to = "customer.support@nelsonricardo.com";

$subject = "New Contact Us Feedback";

$message = "Name: " . $name;
$message .= "\r\n";
$message .= "Email: " . $email;
$message .= "\r\n";
$message .= "Comments: " . $comments;

$headers = 'From: website@nelsonricardo.com' . "\r\n" .
    'Reply-To: website@nelsonricardo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("refresh:3;url=index.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Worldwide Global Corporation &mdash; Contact Us Processed</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>
<body>
	<p><?php echo $name?>, thanks for letting us know.  We'll be in touch soon. (You'll be sent <a href="index.php">home</a> shortly...)</p>
</body>
</html>