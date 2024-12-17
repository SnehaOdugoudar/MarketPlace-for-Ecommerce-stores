<?php
include 'db_connection.php'; // Include the database connection file

// Function to fetch remote users using cURL
function fetchRemoteUsers($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FAILONERROR, true); // Handle HTTP errors
    $data = curl_exec($curl);
    if (curl_errno($curl)) {
        error_log('cURL error: ' . curl_error($curl));  // Log errors instead of displaying them
        return [];  // Return an empty array on error
    }
    curl_close($curl);
    return json_decode($data, true); // Decode JSON into an associative array
}

// Fetch local users excluding the password field
$query = "SELECT id, first_name, last_name, email, home_phone, cell_phone, home_address FROM list_of_users_A";
$result = $link->query($query);

$local_users = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $local_users[] = $row;
    }
}
$link->close(); // Close the local database connection

// URLs for Company B and Company C's user list APIs
$usersB = fetchRemoteUsers('https://sharathcm.great-site.net/carrental/api_users.php');
// $usersC = fetchRemoteUsers('http://companyC.com/api/users');

// Combine all user data into an array
$all_users = ['CompanyA' => $local_users, 'CompanyB' => $usersB];  // Add 'CompanyC' => $usersC when available

// Encode all data into JSON to be processed or displayed
echo json_encode($all_users);
?>
