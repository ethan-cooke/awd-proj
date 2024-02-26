<?php
function clean ($str) {
  return htmlspecialchars(stripslashes(trim($str)));
}

$prefix = clean($_POST["prefix"]);
$firstName = clean($_POST["firstName"]);
$lastName = clean($_POST["lastName"]);
$email = clean($_POST["email"]);
$phone = !empty($_POST["phone"]) ? clean($_POST["phone"]) : "Not provided";
$subject = clean($_POST["subject"]);
$message = clean($_POST["message"]);
$reply = isset($_POST["reply"]) ? clean($_POST["reply"]) : "";

if (!preg_match("/^[A-Z][A-Za-z]*$/", $firstName)){
  die("bad first name");
}
if (!preg_match("/^[A-Z][A-Za-z]*$/", $lastName)){
  die("bad last name");
}
if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/", $email)){
  die("bad email");
}
if ($phone !== "Not provided" && !preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phone)){
  die("bad phone number");
}

$emailHeaderBusiness = "Message from $email \n";
$emailTemplateBusiness = 
"
From: $prefix $firstName $lastName \n
E-mail: $email \n
Phone number: $phone \n
\n
Subject: $subject \n
Message: $message
";

$emailHeaderClient = "Message from u09@mail.cs.smu.ca \n";
$emailTemplateClient = 
"
Hello $prefix $lastName \n
Your message has been successfully received! This is the message you sent:
\n
----
$emailTemplateBusiness
----
\n
We thank you for your feedback, as it helps us shape the future of Timewarp Consoles. Hope you have a great day! \n
";

if($reply !== ""){
    $emailTemplateClient .= "We will follow-up this email soon.";
}

mail("u50@mail.cs.smu.ca",$subject,$emailTemplateBusiness,$emailHeaderBusiness);
mail($email,"RE:$subject",$emailTemplateClient,$emailHeaderClient);

$html = str_replace("\n", "\n<br>", $emailTemplateClient);
$html = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Your Feedback</title>
</head>
<body>
    $html
    <a href=\"../pages/feedback.php\">Click here to go back to the feedback page</a>
</body> 
</html>";
echo $html;

$fileVar = fopen("../data/feedback.txt", "a")
  or die("Error: Could not open log file.");
fwrite($fileVar,
  "\n----------------------------------------------\n")
  or die("Error: Could not write divider to log file.");
fwrite($fileVar, "Date received ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: Could not write date to log file.");
fwrite($fileVar, $emailTemplateBusiness)
  or die("Error: Could not write message to log file");