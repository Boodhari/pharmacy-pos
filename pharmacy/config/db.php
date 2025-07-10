<?php
$conn = new mysqli("localhost", "root ", "", "smart_pharmacy");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>