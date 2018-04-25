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
    <title>GraphC516</title>
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
            newwin.document.write('<TITLE>Dashboard GraphC516</TITLE>\n')
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

    </script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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
            <a href="../About/AboutHome.php">About</a>
            <a  href="../../logout.php">Logout</a>
        </div>
    </div>

    <div class="tab">
        <form action="/action_page.php" style="background: transparent">
            <select name="cars" class="select" onchange="javascript:handleSelect(this)">
                <option value="GraphC503">C - 503</option>
                <option value="GraphC505">C - 505</option>
                <option value="GraphC516" selected>C - 516</option>
                <option value="GraphC527">C - 527</option>
            </select>
            <br><br>

        </form>
        <button>
            <a href="https://www.accuweather.com/en/ca/toronto/m5j/weather-forecast/55488" class="aw-widget-legal">
                <!--
                By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
                -->
            </a><div id="awcc1522458522132" class="aw-widget-current"  data-locationkey="55488" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1522458522132"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
        </button>
        <button class="active" style="color: white">Graph</button>
        <button><a href="../Table/TableC516.php" style="color: white">Table</a></button>
        <button type="button" onclick="printContent('tableData')" value="Print" style="color: white">Print</button>

    </div>
</div>

<div class="mainDiv">

    <div class="MainRight">
        <div class="right">
            <h4 >Current Temperature</h4>
            <hr>
            <img src="../../Images/uc.png" alt="UnderConstruction" width="50px" height="50px">
        </div>
        <div class="right">
            <h4 ></a>Current Humidity</h4>
            <hr>
            <img src="../../Images/uc.png" alt="UnderConstruction" width="50px" height="50px">
        </div>
        <div class="right">
            <h2>Please Check</h2>
            <hr>
            <img src="../../Images/uc.png" alt="UnderConstruction" width="50px" height="50px">
        </div>
    </div>



    <div class="main" id="tableData" content="width=device-width, initial-scale=1.0">
        <img src="../../Images/underconstruction.png" alt="Uns\derConstructin" width="100%" height="50%">
    </div>
</div>

<div class="footer">
    <p>&copy;Dashboard Analytics</p>
</div>



</body>
</div>
</html>