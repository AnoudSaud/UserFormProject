<?php
include("db.php");

$id = $_POST['id'];
$result = mysqli_query($conn, "SELECT status FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($result);
$newStatus = $row['status'] == 1 ? 0 : 1;

mysqli_query($conn, "UPDATE users SET status = $newStatus WHERE id = $id");

header("Location: index.php");
exit;
?>