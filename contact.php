<?php
if (
  !empty($_POST["name"]) &&
  !empty($_POST["email"]) &&
  !empty($_POST["message"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];
  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  // Validate email syntax
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $to = "hillaryrkane47@gmail.com";
    $subject = "My subject";
    $headers = "From: $email" . "\r\n" .
    "CC: hillarykane47@yahoo.com";
    mail($to,$subject,$text,$headers);
    echo "Email recieved!";
  }
  else {
    echo "$email is not a valid email address";
  }


}
else{
  echo "Require to fill all input boxes!";
}
?>
