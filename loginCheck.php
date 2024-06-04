<?php

if (isset($_POST["login"])) {
    require_once "dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    // var_dump($username);
    // var_dump($password);
    // die();
    $sql = "select * from user where username = '$username' and password = '$password'";
    $row = $conn->query($sql);
    if ($row->num_rows > 0) {
        // $data=mysquli
        session_start();
        $_SESSION['login_status'] = 'Active';
        $_SESSION['username'] = $username;
        header('Location:dashboard.php');
    } else {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>window.location='login.php'</script>";
    }
}