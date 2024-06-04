<?php
$id = $_GET['id'];

// connecting database
require_once ("dbconnect.php");
$sql = "UPDATE student set status='0' where id='$id'";
$rows = $conn->query($sql);

if ($rows == TRUE) {
    echo "<script>Deleted</script>";
    echo "<script> window.location.href='dashboared.php';</script>";
}