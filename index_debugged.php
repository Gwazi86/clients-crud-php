<?php
include "config.php";

$sql = "SELECT * FROM users";
$query = $connection->query($sql);

if (!$query) {
    die("Invalid query: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management System</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="top_header">Client List</h2>

        <a class="btn btn-primary" href="/clients/add.php">
            Add Client
        </a>

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
                <?php while ($row = $query->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['created_at'] ?? ''); ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm"
                               href="/clients/edit.php?id=<?php echo urlencode($row['id']); ?>">
                                Edit
                            </a>

                            <a class="btn btn-danger btn-sm"
                               href="/clients/delete.php?id=<?php echo urlencode($row['id']); ?>"
                               onclick="return confirm('Are you sure you want to delete this client?');">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
