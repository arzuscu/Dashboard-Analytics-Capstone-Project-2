<?php include '../../Php/graph.php';?>
<?php include '../../Php/php.php';?>
<?php include '../../Php/php.php';?>
<?php include '../../Php/PhpSort.php';?>

<?php session_start();
$name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>GraphC505</title>
    <link rel="stylesheet" href="../../StyleCSS/GraphCSS.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript">
        $(function(){
            $('.datepicker').datepicker({showAnim: "fadeIn",
                dateFormat: 'yy-mm-dd'});
        })
        function myFunction() {
            window.print();
        }
        function printContent(id){
            str=document.getElementById(id).innerHTML
            newwin=window.open('','printwin','left=100,top=100,width=400,height=400')
            newwin.document.write('<HTML>\n<HEAD><link rel="stylesheet" href="../../StyleCSS/Print.css"/>\n')
            newwin.document.write('<TITLE>Dashboard GraphC505</TITLE>\n')
            newwin.document.write('<script>\n')
            newwin.document.write('function chkstate(){\n')
            newwin.document.write('if(document.readyState=="complete"){\n')
            newwin.document.write('window.close()\n')
            newwin.document.write('}\n')
            newwin.document.write('else{\n')
            newwin.document.write('setTimeout("chkstate()",2000)\n')
            newwin.document.write('}\n')
            newwin.document.write('}\n')
            newwin.document.write('function print_win(){\n')
            newwin.document.write('window.print();\n')
            newwin.document.write('chkstate();\n')
            newwin.document.write('}\n')
            newwin.document.write('<\/script>\n')
            newwin.document.write('</HEAD>\n')
            newwin.document.write('<BODY ALIGN="center" onload="print_win()">\n')
            newwin.document.write(str)
            newwin.document.write('</BODY>\n')
            newwin.document.write('</HTML>\n')
            newwin.document.close()
        }
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart()
        {
            var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

            var options = {
                title:'Sensors C505 Data',
                legend:{position:'bottom'},
                chartArea:{width:'85%', height:'75%', backgroundColor:{fill:'transparent'}
                }

            };

            var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

            chart.draw(data, options);
        }
    </script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
                , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
            }
        })()

        // progressbar.js@1.0.0 version is used
        // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

    </script>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value+".php";
        }
    </script>

</head>
<body>
<div class="wrapper" style="font-family:Verdana;color:#aaaaaa; ">
    <div class="header">
        <a class="logo">Dashboard Analytics</a>
        <div class="header-right">
            <a class="active"><?php echo "$name" ?></a>
            <a href="../About/AboutHome.php">About</a>
            <a  href="../../logout.php">Logout</a>
        </div>
    </div>

    <div class="tab">
        <form action="/action_page.php" style="background: transparent">
            <select name="cars" class="select" onchange="javascript:handleSelect(this)">
                <option value="GraphC503">C - 503</option>
                <option value="GraphC505" selected>C - 505</option>
                <option value="GraphC516">C - 516</option>
                <option value="GraphC527">C - 527</option>
            </select>
            <br><br>

        </form>
        <button>
            <a  href="https://www.accuweather.com/en/ca/toronto/m5j/weather-forecast/55488" class="aw-widget-legal">
                <!--
                By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
                -->
            </a>
            <div id="awcc1522458522132" class="aw-widget-current"  data-locationkey="55488" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1522458522132"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
        </button>
        <button class="active" style="color: white">Graph</button>
        <button><a href="../Table/TableC505.php" style="color: white">Table</a></button>
        <button type="button" onclick="printContent('tableData')" value="Print" style="color: white">Print</button>
        <button type="button" onclick="tableToExcel('tableData', 'W3C Example Table')" style="color: white">Export to Excel</button>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn">Advanced Information</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2 style="text-align: center">Advanced Information about the room</h2>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <th>Temperature</th>
                            <th>Humidity</th>
                        </tr>
                        <tr>
                            <td><p><b>Average Temperature:</b></p>
                                <?php
                                foreach($myResult4 as $_result4) {
                                    echo "" . $_result4['AVGTemp']. "&deg;C";
                                }
                                ?>
                            </td>
                            <td><p><b>Average Humidity:</b></p>
                                <?php
                                foreach($myResult5 as $_result5) {
                                    echo  " ". $_result5['AVGHumid']."%";
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td><p><b>Highest Temperature:</b></p>
                                <?php
                                foreach($myResult6 as $_result6) {
                                    echo  " ". $_result6['HIGHTemp']."&deg;C";
                                }
                                ?>
                            </td>
                            <td><p><b>Highest Humidity:</b></p>
                                <?php
                                foreach($myResult7 as $_result7) {
                                    echo  " ". $_result7['HIGHHumid']."%";
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td><p><b>Lowest Temperature:</b></p>
                                <?php
                                foreach($myResult8 as $_result8) {
                                    echo  " ". $_result8['LOWTemp']."&deg;C";
                                }
                                ?>
                            </td>
                            <td><p><b>Lowest Humidity:</b></p>
                                <?php
                                foreach($myResult9 as $_result9) {
                                    echo  " ". $_result9['LOWHumid']."%";
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer" style="margin-top: 10%">
                    <h3 style="text-align: center">Room - C505</h3>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="mainDiv">

    <div class="MainRight">
        <div id="t" class="right" title="Red: Too Hot(>24&deg;C)  Blue: Too Cold(<21&deg;C)  Normal: (21&deg;C-24&deg;C)">
            <h4 >Current Temperature</h4>
            <hr>

            <?php
            foreach($myResult2 as $_result2) {
                if($_result2['temperature']>24){
                    echo "<h5 style='color: red'>Hot - " . $_result2['temperature']. "&deg;C</h5>";
                    echo '<script language="javascript">';
                    echo 'alert("Temperature is hot!")';
                    echo '</script>';
                }
                else if($_result2['temperature']<21){
                    echo "<h5 style='color: darkblue'>Cold - " . $_result2['temperature']. "&deg;C</h5>";
                    echo '<script language="javascript">';
                    echo 'alert("Temperature is cold!")';
                    echo '</script>';
                }
                else{
                    echo "<h5>" . $_result2['temperature']. "&deg;C</h5>";
                }
            }
            ?>
        </div>

        <div id="humi" class="right" title="Red: Too Moist(>45%)  Blue: Too Dry(<35%)  Normal: (35% - 45%)">
            <h4 ></a>Current Humidity</h4>
            <hr>

            <?php
            foreach($myResult3 as $_result3) {
                if($_result3['humidity']>45){
                    echo "<H5 style='color: red'>High - " . $_result3['humidity']. "%</H5>";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else if($_result3['humidity']<35){
                    echo "<H5 style='color: darkblue'>Low - " . $_result3['humidity']. "%</H5>";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else{
                    echo "<H5 style='color: darkgray'> " . $_result3['humidity']. "%</H5>";
                }
            }
            ?>

        </div>
        <div class="right">
            <h2>Please Check</h2>
            <hr>
            <?php
            foreach($myResult3 as $_result3) {
                if($_result3['humidity']>45){
                    echo "<img src=\"../../Images/Humidity-48%20(1).png\" alt=\"logo\" class=\"humidity2\" >";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else if($_result3['humidity']<35){
                    echo "<img src=\"../../Images/Humidity-48%20(1).png\" alt=\"logo\" class=\"humidity2\" >";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else{
                    echo "";
                }
            }
            ?>
            <?php
            foreach($myResult2 as $_result2) {
                if($_result2['temperature']>24){
                    echo " <img src=\"../../Images/Sun-128.png\" alt=\"logo\" class=\"sun\" >";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else if($_result2['temperature']<21){
                    echo " <img src=\"../../Images/Sun-128.png\" alt=\"logo\" class=\"sun\" >";
                    echo '<script language="javascript">';
                    echo '</script>';
                }
                else{
                    echo "";
                }
            }
            ?>

        </div>
    </div>



    <div class="main" id="tableData" content="width=device-width, initial-scale=1.0">
        <div id="line_chart" class="LineGraph" style="align 'center'; width: 100%; height: 500px;"></div>
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<div class="footer">
    <p>&copy;Dashboard Analytics</p>
</div>

</body>
</html>
