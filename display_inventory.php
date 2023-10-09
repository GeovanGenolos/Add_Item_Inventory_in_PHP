<?php phpinfo();
$db_host = 'localhost';
$db_user = 'username';
$db_pass = 'password';
$db_name = 'inventory_db';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn->connect_error) {
	die("Connection failed: " . $connect_error);
}

$sql = "SELECT item_name, quantity FROM inventory";
$result = $conn->query($sql);

if ($result->_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $rw["item_name" . "<tr><td>" . $row["quantity"] . "<tr><td>";
	}
} else {
	echo "<tr><td> colspan='2'>No items in inventory.<tr><td>";
}

$conn->close();
?>