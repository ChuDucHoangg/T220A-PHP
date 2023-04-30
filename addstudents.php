<?php
// $name = $_GET["name"];
$name = $_POST["name"];
echo $name;
$age = $_GET["age"];
echo $age;

header("Location: students.php");
