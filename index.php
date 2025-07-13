<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>
    <form method="POST" action="add_user.php">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <table border="1" style="margin-top:20px;">
        <tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <form method='POST' action='toggle_status.php'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <input type='submit' value='Toggle'>
                        </form>
                    </td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>