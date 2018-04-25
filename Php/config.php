<?php

$dbhost="localhost";  // hostname
$dbuser="root"; // mysql username
$dbpass="team15"; // mysql password
$db="Dashboard"; // database you want to use
$myResult2=[];

$conn=mysqli_connect( $dbhost, $dbuser, $dbpass, $db ) or die("Could not connect: " .mysqli_error($conn) );

$stmt2->execute();
$result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
$myResult2 = $stmt2->fetchAll();

//you can also directly write values in mysqli_connect():

// $conn=mysqli_connect("localhost", "root", "", "test");

?>