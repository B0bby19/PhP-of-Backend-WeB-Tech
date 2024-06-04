<html>

<head></head>
<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>Register</h1>
    <form method="post">
        <label>
            <span>Enter username: </span>
            <input autofocus="true" type="text" name="username">
        </label>
        <label>
            <span>Enter password: </span>
            <input type="password" name="password">
        </label>
        <input type="submit" name="register" value="register">
    </form>
</body>

</html>

<?php
if (isset($_POST["register"])) {
    require_once ("dbconnect.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $myQuery = "INSERT INTO user (username, password) VALUES('$username', '$password')";


    $rows = $conn->query($myQuery);

    if ($rows == TRUE) {
        echo "<script>Registered</script>";
        echo "<script> window.location.href='dashboard.php';</script>";
    }
}
?>