<?php
if (isset($_POST['submit'])) {
  $to = "warrenmadx@icloud.com";
  $subject = "New Message from " . $_POST['name'];
  $message = "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\n\n" . $_POST['message'];
  $headers = "From: " . $_POST['email'] . "\r\n" . "Reply-To: " . $_POST['email'] . "\r\n" . "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);
  echo "Thank you for contacting me. Your message has been sent!";
}
?>

