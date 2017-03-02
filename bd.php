<?php
    $db = mysqli_connect("localhost", "ICaxapI", "Kekus", "Square");
    if (!$db) {
    	die("Database connection failed: " . mysqli_error());
	}
?>