<?php
include "config/db.php";
$title = $_POST['title'];
mysqli_query($conn, "INSERT INTO tasks (title) VALUES ('$title')");
header("Location: index.php");
