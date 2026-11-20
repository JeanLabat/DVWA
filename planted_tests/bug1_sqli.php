<?php
// PLANTED BUG 1: SQL injection (user input concatenated into a query).
// Test file for a static-analysis comparison. Not part of DVWA.

$conn = new mysqli("localhost", "app", "app", "demo");

$q = "SELECT * FROM users WHERE id = " . $_GET['id'];
$result = $conn->query($q);

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'];
}
