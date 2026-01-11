<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "machine25llc@proton.me";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    header .= "CC: ".$email."\r\n";

    mail($to, "Website Message: $subject", $message, $headers);

    exit;
}
?>

