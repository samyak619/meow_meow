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

// Retrieve orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Order ID: " . $row["id"] . "<br>";
        echo "Customer: " . $row["customer_name"] . "<br>";
        echo "Items: " . $row["items"] . "<br>";
        echo "Total Price: $" . $row["total_price"] . "<br>";
        echo "Order Date: " . $row["order_date"] . "<br>";
        echo "-------------------------<br>";
    }
} else {
    echo "No orders yet.";
}

// Close connection
$conn->close();
?>
