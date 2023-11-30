<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "sidn9190";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$customer_name = $_POST['customer_name'];
$items = $_POST['items'];
$total_price = $_POST['total_price'];

// Insert data into the database
$sql = "INSERT INTO orders (customer_name, items, total_price) VALUES ('$customer_name', '$items', $total_price)";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
