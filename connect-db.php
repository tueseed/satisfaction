 <?php
 	$server = "us-cdbr-iron-east-01.cleardb.net";
    $username = "bb7c4f6eb9e2db";
    $password = "db509e16";
    $db = "heroku_7c8a28a63a99f07";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");