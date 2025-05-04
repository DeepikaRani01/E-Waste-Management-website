<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "youremail@example.com"; // Change this to your email
  $subject = "New Message from E-Waste Contact Form";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong. Please try again.";
  }
}
?>