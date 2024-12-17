<?php
session_start();
include '../db_connection.php';  // Adjust the path as necessary

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $link->real_escape_string($_GET['search']);
    $query = "SELECT first_name, last_name, email, home_phone, cell_phone, home_address FROM users WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR email LIKE '%$search%' OR home_phone LIKE '%$search%' OR cell_phone LIKE '%$search%'";
    $result = $link->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
    <div class="header">
       
       <button class="button" onclick="location.href='index.php';" style="width: 160px;">Home</button>

       <!-- <a href="../logout.php">Logout</a> -->
   </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
        }
        th, td {
            background-color: #d1cccc;;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            color: black;
        }
        th {
            background-color: black;
            color: white;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        .no-results {
            margin-top: 20px;
            font-size: 18px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Search Results</h1>
    <?php if (isset($result) && $result->num_rows > 0): ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Home Phone</th>
                <th>Cell Phone</th>
                <th>Home Address</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['first_name']); ?></td>
                    <td><?= htmlspecialchars($row['last_name']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['home_phone']); ?></td>
                    <td><?= htmlspecialchars($row['cell_phone']); ?></td>
                    <td><?= htmlspecialchars($row['home_address']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p class="no-results">No results found.</p>
    <?php endif; ?>
</body>
</html>
