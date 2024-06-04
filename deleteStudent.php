<?php

$id = $_GET['id'];
// connecting database
require_once ("dbconnect.php");
$sql = "DELETE FROM student where id='$id'";
$rows = $conn->query($sql);

if ($rows == TRUE) {
    echo "<script>Deleted</script>";
    echo "<script>
window.location.href='dashboard.php';
</script>";
}

