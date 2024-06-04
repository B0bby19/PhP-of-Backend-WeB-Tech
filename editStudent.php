<html>
<head></head>
<style>
    label {
        display: block;
    }
</style>
<body>
    <h1>Student Edit Form</h1>
    <?php
    $id = $_GET['id'];
    require_once("dbconnect.php");
    $sql = "SELECT * FROM student WHERE id='$id'";
    $row = $conn->query($sql);
    $data = mysqli_fetch_object($row);
    ?>
    <form method="post">
        <label>
            <span>Enter student name: </span>
            <input value="<?php echo $data->name ?>" autofocus="true" type="text" name="name">
        </label>
        <label>
            <span>Enter roll name: </span>
            <input value="<?php echo $data->roll_no ?>" type="text" name="rollNo">
        </label>
        <label>
            <span>Enter address: </span>
            <input value="<?php echo $data->address ?>" type="text" name="address">
        </label>
        <input type="submit" name="update" value="update">
    </form>
</body>
</html>

<?php
if (isset($_POST["update"])) {
    $name = $_POST['name'];
    $roll = $_POST['rollNo'];
    $address = $_POST['address'];
    $sql = "UPDATE student SET roll_no='$roll', name='$name', address='$address' WHERE id='$id'";
    $rows = $conn->query($sql);
    if ($rows === TRUE) {
        echo "<script>alert('Updated');</script>";
        echo "<script>window.location.href='dashboard.php';</script>";
    }
}
?>