<?php

$email = $_POST["email"];
$pwd = $_POST["password"];
// $pwd = md5($pwd);

$sql = "SELECT * FROM users WHERE email='$email' AND psd='$pwd';";

if (empty($email) || empty($pwd)) {
  echo "All fields are required";
} else {
  if ($sql) {
    echo "Login successful as $email";
  }

  if (!$sql) {
    echo "Invalid credentials";
  }
}
