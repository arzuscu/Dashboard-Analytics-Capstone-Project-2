<?php include '../../Php/graph.php';?>
<?php include '../../Php/php.php';?>
<?php include '../../Php/php.php';?>
<?php include '../../Php/PhpSort.php';?>
<?php include '../../Php/AVG.php';?>

<?php session_start();
$name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>GraphC505</title>
    <link rel="stylesheet" href="../../StyleCSS/AboutHome.css">
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
<div class="wrapper">
    <body style="font-family:Verdana;color:#aaaaaa; ">
    <div class="header">
        <a class="logo">Dashboard Analytics</a>
        <div class="header-right">
            <a class="active"><?php echo "$name" ?></a>
            <a href="../Graph/GraphC505.php">Home</a>
            <a href="../About/AboutHome.php">About</a>
            <a  href="../../logout.php">Logout</a>

        </div>
    </div>

    <div class="mainDiv">

    <div class="tab" style="width: 100%">
        <button class="tablinks" onclick="openCity(event, 'ArduinoConn')" id="defaultOpen"><b>Arduino Connection</b></button>
        <button class="tablinks" onclick="openCity(event, 'AWS')"><b>AWS</b></button>
        <button class="tablinks" onclick="openCity(event, 'Filezilla')"><b>Filezilla</b></button>
        <button class="tablinks" onclick="openCity(event, 'Workbench')"><b>Workbench</b></button>

    </div>

    <div id="ArduinoConn" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <h3>Arduino Connection</h3>



            <form>
                <h3>Connection Schema</h3><br><br>
                <img src="AboutImages/ADConnSchema.PNG" alt="logo" class="Image" ><br><br>

                <h3>Arduino code</h3><br><br>
                <img src="AboutImages/ADConn1.jpg" alt="logo" class="Image"><br><br>
                <img src="AboutImages/ADConn2.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConn3.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConn4.jpg" alt="logo" class="Image" ><br><br>
                <h3>The result of the Arduino code (temperature and humidity result)</h3><br><br>
                <img src="AboutImages/AdResults.jpg" alt="logo" class="Image" ><br><br>
                <h3>Php File is api.php</h3><br><br>
                <img src="AboutImages/ADApiConn.jpg" alt="logo" class="Image" ><br><br>
                <h3>Seeing the database table from the console:</h3><br><br>
                <img src="AboutImages/ADConsole1.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConsole2.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConsole3.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConsole4.jpg" alt="logo" class="Image" ><br><br>
                <img src="AboutImages/ADConsole5.jpg" alt="logo" class="Image" ><br><br>
                <h3>Your index.php file</h3><br><br>
                <img src="AboutImages/ADIndex.jpg" alt="logo" class="Image" ><br><br>



            </form>




    </div>

    <div id="AWS" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>


        <h3>Connect AWS Server</h3>

        <form>

            <h3> 1.) Connect to the server<br><br>
                 2.) Download mysql work bench<br><br>
                 3.) Skip login by clicking "No thanks, Just…"<br><br>
                 4.) When its installed open the application<br><br>
                 5.) Click on the MySQL Connections</h3><br><br>
            <img src="AboutImages/WelcomeSql.jpg" alt="logo" class="Image" ><br><br>
            <h3> 6.) Fill out the Connection Name<br><br>
                 7.) Type “34.227.118.133” in Hostname box</h3> <br><br>
            <img src="AboutImages/Connection.jpg" alt="logo" class="Image" ><br><br>
            <h3> 8.) Click on the Store in Vault..<br><br>
                 9.) Type “team15” in the password section</h3><br><br>
            <img src="AboutImages/Login.jpg" alt="logo" class="Image" ><br><br>
            <h3> 10.) Click on test connection</h3><br><br>
            <img src="AboutImages/TestConn.jpg" alt="logo" class="Image" ><br><br>
            <h3> 11.) Click ok<br><br>
                 12.) You have connection to AWS MySQL</h3><br><br>
            <img src="AboutImages/ViewConn.jpg" alt="logo" class="Image" ><br><br>
        </form>

    </div>

    <div id="Filezilla" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <h3>Connect FileZilla Server</h3>

        <form>

            <h3>Edit (Preferences)
                <br><br>Settings
                <br><br>Connection
                <br><br>SFTP, Click Add key file”<br><br>
                Browse to the location of your amazon_1.pem file and select it.<br><br>
                File Site Manager Add a new site with the following parameters:<br><br>
                Host: 34.227.118.133<br><br>
                Protocol: SFTP<br><br>
                Logon Type: Normal<br><br>
                User: ec2-user<br><br>
                Nothing for password<br><br>
                Click connect</h3><br><br>

        </form>

    </div>


        <div id="Workbench" class="tabcontent">
            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
            <h3>Connect Mysql Work Branch to AWS Server</h3>

            <form>
                    <h2><br>Connect Mysql Work Branch to AWS Server</h2>

                    <h3>Download amazon_1 file from folder<br><br>
                        Install  putty and putty generator<br><br>
                        https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html
                    </h3><br><br>
                    <img src="AboutImages/AWSMSI.jpg" alt="logo" class="Image1" ><br><br>
                    <img src="AboutImages/AWSputty.jpg" alt="logo" class="Image1" ><br><br>

                    <h3>Open PuTTYgen<br><br>
                        Click Load the select and open amazon_1.pem<br><br>
                        Click Save private key<br><br>
                        Warning  will be pop up
                    </h3> <br><br>
                    <img src="AboutImages/AWSputtyWarning.jpg" alt="logo" class="Image" ><br><br>
                    <h3>For now click on yes<br><br>
                        Then name the new file amazon_1 and save it the same place that your amazon_1.pem file is placed<br><br><br><br>

                        Open the PuTTY<br><br>
                        On Connection section on side bar open SSH then open Auth<br><br>
                        Then Browse the Amazon_1 (PuTTY Private key File) on Private key file for Authentication box</h3><br><br>
                    <img src="AboutImages/AWSputtyConn.jpg" alt="logo" class="Image" ><br><br>
                    <h3>The select Session on side bar<br><br>
                        Type “34.227.118.133” in Host Name (or IP address) box<br><br>
                        Type “amazon” in Saved Session box<br><br>
                        Click Save<br><br>
                        Then click Load</h3><br><br>
                    <img src="AboutImages/AWSputtyConn.jpg" alt="logo" class="Image" ><br><br>
                    <h3>PuTTY Security Alert will show up, click okey<br><br>
                        Then you type ec2-user in Login as: command line<br><br>
                        You are now connected to AWS server<br><br>
                    </h3><br><br>
                </form>


        </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    </div>



    </body>
</div>
</html>
