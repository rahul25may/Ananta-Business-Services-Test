<?php

$servername = "localhost";
$username = "local";
$password = "12345678";
$dbname = "customer_details";

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: ". $conn->connect_error);
}
function insertCustomerDetails($conn, $name, $address, $email, $phone) {
    $sql = "INSERT INTO customers (name, address, email, phone_no) VALUES ('$name', '$address', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function generateBill($items) {
    $rates = [
        'A' => 10,
        'B' => 20,
        'C' => 15,
        'D' => 5
    ];

    $total = 0;
    foreach ($items as $item) {
        $total += $rates[$item];
    }

    $tax = $total * 0.18;
    $total += $tax;

    return $total;
}

$items = ['A', 'B', 'C', 'D'];
$totalBill = generateBill($items);
echo "Total Bill Amount: $totalBill <br>";
$conn->close();

?>