<?php
include "config.php";
$query = mysqli_query($connection, "SELECT * FROM users");

if(!$query) {
    die("Invalid query: ". mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management System</title>

    <!-- CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container my-5">
        <h2 class="top_header">Client List</h2>
        <a class="btn btn-primary" href="/clients/add.php" role="button">Add Client</a>
        <br><br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date Added</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
            // Reading data of each row
                 while($row = $query->fetch_assoc()) {
                    echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/clients/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/clients/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
    ";
}
?>
                <!-- <tr>
                    <td>10</td>
                    <td>Andile Magwaza</td>
                    <td>andilesylvestermagwaza@gmail.com</td>
                    <td>+27739963060</td>
                    <td>Stand No. 439, Hectorspruit</td>
                    <td>22/10/2026</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/clients/edit.php">Edit</a>
                        <a class="btn btn-primary btn-sm" href="/clients/delete.php">Delete</a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
</html>