<?php
session_start();

require_once '../db_connection.php';

// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header('Location: login.php');
//     exit;
// }

$query = "SELECT first_name, last_name, email, home_phone, cell_phone, home_address FROM users";
$result = $link->query($query);

if (!$result) {
    die("Query failed: " . $link->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>List of All Registered Users</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Home Phone Number</th>
            <th>Mobile Phone Number</th>
            <th>Home Address</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['home_phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['cell_phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['home_address']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No users found</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
