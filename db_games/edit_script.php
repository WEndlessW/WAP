<?php
include "db_conn.php";

$name = $_POST['name'];
$realese = $_POST['realese'];
$score  = $_POST['score'];
$id = $_COOKIE[$id];

$sql_update = "UPDATE games SET name = '$name', realese = '$realese', score = $score WHERE id = $id";
mysqli_query($conn, $sql_update);




?>