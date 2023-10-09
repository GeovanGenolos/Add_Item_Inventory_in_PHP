<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST["item_name"];
    $quantity = intval($_POST["quantity"]);
    
    // Connect to your database (Replace with your actual database connection)
    $db_host = 'localhost';
    $db_user = 'username';
    $db_pass = 'password';
    $db_name = 'inventory_db';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert new item into the inventory table
    $sql = "INSERT INTO inventory (item_name, quantity) VALUES ('$item_name', $quantity)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Item added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
