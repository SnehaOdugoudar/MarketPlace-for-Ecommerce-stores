<?php
require_once '../db_connection.php'; // Include database connection

// Function to fetch remote data from a JSON endpoint
function fetchRemoteData($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Local database data
$localUsers = [];
try {
    $sql = "SELECT first_name, last_name, email, created_at FROM users";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $cnt = 1;
        while ($row = $result->fetch_assoc()) {
            $localUsers[] = [
                'SNo' => $cnt++,
                'FullName' => $row['first_name'] . ' ' . $row['last_name'],
                'EmailId' => $row['email'],
                'RegDate' => $row['created_at']
            ];
        }
    }
} catch (Exception $e) {
    $localUsers = [];
}

// Fetch data from remote JSON endpoints
$remoteUrl1 = "http://charan272.infinityfreeapp.com/GenAI/apiusers.php"; // Replace with actual URL
$remoteUrl2 = "http://sharathcm.great-site.net/carrental/api_users.php"; // Replace with actual URL
$remoteData1 = fetchRemoteData($remoteUrl1);
$remoteData2 = fetchRemoteData($remoteUrl2);

// Format remote data
function formatRemoteData($data) {
    $formatted = [];
    $cnt = 1;
    if (isset($data['data']) && is_array($data['data'])) {
        foreach ($data['data'] as $user) {
            $formatted[] = [
                'SNo' => $cnt++,
                'FullName' => $user['FullName'],
                'EmailId' => $user['EmailId'],
                'RegDate' => $user['RegDate']
            ];
        }
    }
    return $formatted;
}

$remoteUsers1 = formatRemoteData($remoteData1);
$remoteUsers2 = formatRemoteData($remoteData2);

// Function to render table
function renderTable($users, $title) {
    echo "<div class='table-container'>";
    echo "<h3 class='table-title'>$title</h3>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead>
            <tr>
                <th>SNo</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>
          </thead>";
    echo "<tbody>";
    if (!empty($users)) {
        foreach ($users as $user) {
            echo "<tr>
                    <td>" . htmlentities($user['SNo']) . "</td>
                    <td>" . htmlentities($user['FullName']) . "</td>
                    <td>" . htmlentities($user['EmailId']) . "</td>
                    <td>" . htmlentities($user['RegDate']) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
    }
    echo "</tbody></table>";
    echo "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fdf5e6;
            margin: 0;
            padding: 20px;
        }
        .container {
            margin-top: 20px;
            padding-bottom: 80px; /* Ensure space for the button */
        }
        .table-container {
            margin-bottom: 40px;
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .table-title {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }
        .btn-back {
            display: inline-block;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1rem;
            text-align: center;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #0056b3;
            color: white;
            text-decoration: none;
        }
        .footer-btn {
            text-align: center; /* Center the button */
            position: fixed; /* Stick the button to the bottom */
            bottom: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Render the tables
            renderTable($localUsers, "Local Users");
            renderTable($remoteUsers1, "Remote Users - Source 1");
            renderTable($remoteUsers2, "Remote Users - Source 2");
        ?>
    </div>

    <div class="footer-btn">
        <a href="index.php" class="btn-back">Return to Home</a>
    </div>
</body>
</html>