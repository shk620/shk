<?php
// contact_php.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // You can now use these variables to process the data,
  // such as sending an email, storing it in a database, etc.

  // For example, to send an email:
  $to = "rivieravoyage2024@gmail.com";
  $subject = "Contact Form Submission";
  $message = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  mail($to, $subject, $message, $headers);


  // Redirect   
 the user to a thank you page or display a success message
  header("Location: ");   

  exit();
}
?>