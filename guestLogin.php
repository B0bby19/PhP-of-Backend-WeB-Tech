<?php

require_once ("dbconnect.php");

$guest_id = rand(11111, 99999);

$query = "INSERT into guestlogin (guest_id) VALUES ($guest_id);";

session_start();
$_SESSION['login_status'] = "guest_active";

$rows = $conn->query($query);

if ($rows == TRUE) {
    echo "<script>Logged in as guest</script>";
    echo "<script> window.location.href='dashboard.php';</script>";
}
?>