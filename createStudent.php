<html>

<head></head>

<style>
    label {
        display: block;
    }
</style>

<body>
    <h1>Student Entry Form</h1>
    <form action="saveStudent.php" method="post">
        <label>
            <span>Enter sutdent name: </span>
            <input autofocus="true" type="text" name="username">
        </label>
        <label>
            <span>Enter roll name: </span>
            <input type="text" name="password">
        </label>
        <label>
            <span>Enter address: </span>
            <input type="text" name="address">
        </label>
        <input value="Add Student" type="submit" name="submit"></input>
    </form>
</body>

</html>