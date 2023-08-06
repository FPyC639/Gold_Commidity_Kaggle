<?php
header('Content-Type: application/json');

include "dbconfig.php";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$fetch_records = "SELECT Date, GOLD FROM commidity";
$result = mysqli_query($con, $fetch_records);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($con);

// Output the data as JSON
echo json_encode($data);
?>
