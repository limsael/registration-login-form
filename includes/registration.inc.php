<?php


$fname = $_POST['fname'];
$email = $_POST['email'];
$pwd = $_POST['password'];

// require_once "../Classes/Dbh.php";
// require_once "../Classes/Signup.php";

require_once "./dbh.inc.php";

if (empty($fname) || empty($email) || empty($pwd)) {
  echo 'All fields are required';
} else {
  $pwd = password_hash($pwd, PASSWORD_DEFAULT);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql = $pdo->prepare("INSERT INTO users (nom, email, psd) VALUES (:fname, :email, :pwd);");

    $sql->bindParam(":fname", $fname);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":pwd", $pwd);

    $sql->execute();

    echo "Registered Successfully!";
  } else {
    echo 'Invalid email format';
  }
}
