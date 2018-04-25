<?php include '../Php/php.php';?>
<?php
session_start();
$name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Dashboard Graph</title>
    <link rel="stylesheet" href="../StyleCSS/Home.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
</head>

<body>
<div class="header">
    <ul>
        <li><a href="Home.php"><img src="../Images/Home.png" alt="logo" class="home" ></a></li>
        <li><a>Dashboard Analytics</a></li>
        <li style="float:right"><a href="../logout.php"><img src="../Images/Logout.png" alt="logo" class="logout" ></a></li>


    </ul>
</div>

<div style="overflow:auto">
    <div class="row">
        <div class="column2">
            <h2>C - 503</h2>
        </div><BR>
        <div class="column">

            <div class="menuitem" ><a href="Graph/GraphC503.php"><img src="../Images/Graph.png" alt="logo" class="graph"></div>

        </div>
        <div class="column">

            <div class="menuitem" > <a href="Table/TableC503.php"><img src="../Images/Table.png" alt="logo" class="graph"></div>

        </div><div class="column">

            <h3><a href="../index.php"></a>Current Temperature</h3>
            <h3>N/A</h3>

        </div>
        <div class="column">
            <h3 class="humidity"></a>Current Humidity</h3>
            <h3>N/A</h3>

        </div>
    </div>

    <div class="row">
        <div class="column2">
            <h2>C - 505</h2>
        </div>
        <div class="column">

            <div class="menuitem" ><a href="Graph/GraphC505.php"><img src="../Images/Graph.png" alt="logo" class="graph"></div>

        </div>
        <div class="column">

            <div class="menuitem" > <a href="Table/TableC505.php"><img src="../Images/Table.png" alt="logo" class="graph"></div>

        </div><div class="column">

                <h3><a href="../index.php"></a>Current Temperature</h3>
            <?php
            foreach($myResult2 as $_result2) {
                if($_result2['temperature']>24){
                echo "<H3 style='color: darkred'>" . $_result2['temperature']. "&deg;C</H3>";
            }
            else if($_result2['temperature']<21){
                    echo "<H3 style='color: blue'>" . $_result2['temperature']. "&deg;C</H3>";
            }
            else{
                echo "<H3 style='color: darkgray'>" . $_result2['temperature']. "&deg;C</H3>";
                }
            }
            ?>
        </div>
        <div class="column">
                <h3 class="humidity"></a>Current Humidity</h3>
            <?php
            foreach($myResult3 as $_result3) {
                if($_result3['humidity']>45){
                    echo "<H3 style='color: darkred'>" . $_result3['humidity']. "%</H3>";
                }
                else if($_result3['humidity']<35){
                    echo "<H3 style='color: blue'>" . $_result3['humidity']. "%</H3>";
                }
                else{
                    echo "<H3 style='color: darkgray'>" . $_result3['humidity']. "%</H3>";
                }
            }
            ?>


        </div>
    </div>

    <div class="row">
        <div class="column2">
            <h2>C - 516</h2>
        </div>
        <div class="column">

            <div class="menuitem" ><a href="Graph/GraphC516.php"><img src="../Images/Graph.png" alt="logo" class="graph"></div>

        </div>
        <div class="column">

            <div class="menuitem" > <a href="Table/TableC516.php"><img src="../Images/Table.png" alt="logo" class="graph"></div>

        </div><div class="column">

            <h3><a href="../index.php"></a>Current Temperature</h3>
            <h3>N/A</h3>

        </div>
        <div class="column">
            <h3 class="humidity"></a>Current Humidity</h3>
            <h3>N/A</h3>



        </div>
    </div>

    <div class="row">
        <div class="column2">
            <h2>C - 527</h2>
        </div>
        <div class="column">

            <div class="menuitem" ><a href="Graph/GraphC527.php"><img src="../Images/Graph.png" alt="logo" class="graph"></div>

        </div>
        <div class="column">

            <div class="menuitem" > <a href="Table/TableC527.php"><img src="../Images/Table.png" alt="logo" class="graph"></div>

        </div><div class="column">

            <h3><a href="../index.php"></a>Current Temperature</h3>
            <h3>N/A</h3>

        </div>
        <div class="column">
            <h3 class="humidity"></a>Current Humidity</h3>
            <h3>N/A</h3>


        </div>
    </div>
</div>
<div class="footer">

    <ul>

        <li><p style="color: white">Too Hot / Dry (above 24&deg;)  <label name="red" style="background-color: darkred; color: darkred"> colorlabel </label></p></li>
        <li><p style="color: white">Normal(between 21&deg; - 24&deg;)  <label name="transparent" style="background-color: darkgray; color: darkgray"> colorlabel </label></p></li>
        <li><p style="color: white"> Too Cold / Humid dry(below 21&deg;)  <label name="red" style="background-color: blue; color: blue"> colorlabel </label></p></li>


    </ul>




</body>

</html>
