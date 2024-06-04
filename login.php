<html>

<head></head>
<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>Login</h1>
    <form action="loginCheck.php" method="post">
        <label>
            <span>Enter username: </span>
            <input autofocus="true" type="text" name="username">
        </label>
        <label>
            <span>Enter password: </span>
            <input type="password" name="password">
        </label>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>