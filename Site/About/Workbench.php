
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <title>Dashboard TableC503</title>
    <link rel="stylesheet" href="../../StyleCSS/AboutForms.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
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
            newwin.document.write('<TITLE>Dashboard TableC503</TITLE>\n')
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


</head>

<body style="font-family:Verdana;color:#aaaaaa;">
<div class="header">
    <ul>
        <li><a href="../Graph/GraphC505.php"><img src="../../Images/Home.png" alt="logo" class="home" ></a></li>
        <li><a>Dashboard Analytics</a></li>
        <li style="float:right"><a href="../../logout.php"><img src="../../Images/Logout.png" alt="logo" class="logout" ></a></li>
    </ul>
</div>

<div style="overflow:auto">
    <div class="menu">


        <div class="menuitem"> <a href="AboutHome.php" style="color: white">Home</a></div>
        <div class="menuitem"> <a href="ArduinoConn.php" style="color: white">Arduino Connection</a></div>
        <div class="menuitem"> <a href="AWS.php" style="color: white">Amazon Web Server</a></div>
        <div class="menuitem"> <a href="Filezilla.php" style="color: white">FilZilla Connection</a></div>
        <div class="menuitem"> <a href="Workbench.php" style="color: white">Workbench Connection</a></div>
    </div>
    <div class="main" id="tableData">


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



</body>

</html>
