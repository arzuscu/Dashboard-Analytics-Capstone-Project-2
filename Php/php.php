<?php
$servername = "localhost";
$username = "root";
$password = "team15";
$dbname = "Dashboard";
$myResult=[];
$myResult2=[];
$myResult4=[];
$myResult5=[];
$myResult6=[];
$myResult7=[];
$myResult8=[];
$myResult9=[];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM sensorData ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $myResult = $stmt->fetchAll();
    $stmt2 = $conn->prepare("SELECT temperature FROM sensorData WHERE id=(SELECT max(id) FROM sensorData ) ORDER BY id DESC");
    $stmt2->execute();
    $result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    $myResult2 = $stmt2->fetchAll();
    $stmt3 = $conn->prepare("SELECT humidity FROM sensorData WHERE id=(SELECT max(id) FROM sensorData ) ORDER BY id DESC");
    $stmt3->execute();
    $result3 = $stmt3->setFetchMode(PDO::FETCH_ASSOC);
    $myResult3 = $stmt3->fetchAll();

    $stmt4 = $conn->prepare("SELECT  ROUND(AVG(temperature),0) AS AVGTemp FROM sensorData");
    $stmt4->execute();
    $result4 = $stmt4->setFetchMode(PDO::FETCH_ASSOC);
    $myResult4 = $stmt4->fetchAll();

    $stmt5 = $conn->prepare("SELECT  ROUND(AVG(humidity),0) AS AVGHumid FROM sensorData");
    $stmt5->execute();
    $result5 = $stmt5->setFetchMode(PDO::FETCH_ASSOC);
    $myResult5 = $stmt5->fetchAll();

    $stmt6 = $conn->prepare("SELECT  MAX(temperature) AS HIGHTemp FROM sensorData");
    $stmt6->execute();
    $result6 = $stmt6->setFetchMode(PDO::FETCH_ASSOC);
    $myResult6 = $stmt6->fetchAll();

    $stmt7 = $conn->prepare("SELECT  MAX(humidity) AS HIGHHumid FROM sensorData");
    $stmt7->execute();
    $result7 = $stmt7->setFetchMode(PDO::FETCH_ASSOC);
    $myResult7 = $stmt7->fetchAll();

    $stmt8 = $conn->prepare("SELECT  MIN(temperature) AS LOWTemp FROM sensorData");
    $stmt8->execute();
    $result8 = $stmt8->setFetchMode(PDO::FETCH_ASSOC);
    $myResult8 = $stmt8->fetchAll();

    $stmt9 = $conn->prepare("SELECT  MIN(humidity) AS LOWHumid FROM sensorData");
    $stmt9->execute();
    $result9 = $stmt9->setFetchMode(PDO::FETCH_ASSOC);
    $myResult9 = $stmt9->fetchAll();

    $graphData = array();
    if ($stmt->num_rows > 0) {
        //Converting the results into an associative array
        while($row = $stmt->fetch_assoc()) {
            $graphDataItem = array();
            $graphDataItem['label'] = $row['date'];
            $jsonArrayItem['value'] = $row['temperature'];
            array_push($graphData, $graphDataItem);
        }
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>