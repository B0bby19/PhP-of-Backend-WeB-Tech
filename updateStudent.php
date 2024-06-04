<?php

if (!isset($_POST["submit"])) {
    header('Location.dashboard.php');
}

$name = $_POST['name'];
$roll = $_POST['rollNo'];
$address = $_POST['address'];

// connecting database
require_once ("dbconnect.php");
$sql = "INSERT INTO student (name, roll_no, address, status) VALUES('$name', '$roll', '$address', '1')";
$rows = $conn->query($sql);

if ($rows == TRUE) {
    echo "<script>Added</script>";
    echo "<script> window.location.href='dashboard.php';</script>";
}

