<?php

$dsn = "mysql:host=localhost;dbname=exophp";
$dbusername = "root";
$dbpwd = "";

try {
  $pdo = new PDO($dsn, $dbusername, $dbpwd);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
  die("Connection failed: " . $th->getMessage());
}
