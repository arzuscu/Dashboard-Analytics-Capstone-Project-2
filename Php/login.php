<?php
$servername = "localhost";
$username = "root";
$password = "team15";
$dbname = "Dashboard";
$myResult=[];
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
if(isset($_POST['submit']))
{

    $name=$_POST['username'];
    $pwd=$_POST['password'];
    if($name!=''&&$pwd!='')
    {
        $stmt = $conn->prepare("select * from user where username='".$name."' and password='".$pwd."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $myResult = $stmt->fetchAll();
        if($myResult)
        {
            $_SESSION['name']=$name;
            header('location:Site/Graph/GraphC505.php');
        }
        else
        {
            $message = "Invalid Username/Password!!\\nPlease Try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //header('location:index.php');
        }
    }
    else
    {
        echo'Enter both username and password';
    }
}
?>
