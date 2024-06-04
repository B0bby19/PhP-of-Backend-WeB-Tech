<html>

<head>
    <?php
    session_start();
    if ($_SESSION['login_status'] != 'Active' && $_SESSION['login_status'] != "guest_active") {
        header('Location:login.php');
    }

    $isGuest = false;
    if ($_SESSION['login_status'] != 'guest_active') {
        $isGuest = true;
    }

    ?>
</head>

<body>
    <h1>Welcome <?php echo !$isGuest ? $_SESSION['username'] : "Guest"; ?></h1>
    <a href="logout.php"><button>Logout</button></a>
    <h1>Student list</h1>
    <a href="createStudent.php"><button>Add New Student</button></a>
    <table border="1px" cellspacing="0">
        <thead>
            <th>SN</th>
            <th>Name</th>
            <th>Roll no</th>
            <th>Address</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php
            require_once ("dbconnect.php");
            $sql = "select * from student";
            // it has all the rows
            $rows = $conn->query($sql);
            if ($rows->num_rows > 0) {
                $i = 1;
                while ($data = mysqli_fetch_array($rows)) {
                    // data has a single data as a associative array
                    // associative array ko index chai table ko heading hunxa
            
                    // web always has the soft delete
                    // delete vayesi status matra change garne actually ma delete garne haina
                    if ($data['status'] != 0) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $data['name']; ?>
                            </td>
                            <td>
                                <?php echo $data['roll_no']; ?>
                            </td>
                            <td>
                                <?php echo $data['address']; ?>
                            </td>
                            <td>
                                <a href='editStudent.php?id=<?php echo $data['id']; ?>'>
                                    <button disabled=<?php echo $isGuest ? true : false; ?>>Edit</button>
                                </a>
                                <!-- <a onclick='return confirm("Are you sure")' href='deleteStudent.php?id=<?php echo $data['id']; ?>'>
                                    <button>Delete</button>
                                </a> -->
                                <a onclick='return confirm("Are you sure")' href='softDelete.php?id=<?php echo $data['id']; ?>'>
                                    <button disabled=<?php echo $isGuest ? true : false; ?>>Delete</button>
                                </a>
                            </td>

                        </tr>
                        <?php
                    }
                }
            } else {
                echo "Record not found";
            }
            ?>
        </tbody>
    </table>
</body>

</html>