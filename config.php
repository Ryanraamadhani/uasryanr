<?php
$mysqli = new mysqli("localhost", "root", "", "sim_rs");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
