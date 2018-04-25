<?php
if(isset($_POST['search']) && ($_POST['valueToSearch'])< date("2018-04-12"))
{
    echo '<script language="javascript">';
    echo 'alert("Sorry! Arduino was not set before 12th April, 2018!! \n No Data available before 12th April, 2018.")';
    echo '</script>';
}
else if(isset($_POST['search']) && ($_POST['valueToSearch'])< date("Y-m-d") && ($_POST['valueToSearch'])> date("2018-04-12") )
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
        $query = "SELECT * FROM `sensorData` WHERE date LIKE '%" . $valueToSearch . "%' ORDER BY id DESC";
        $search_result = filterTable($query);
}
else if(isset($_POST['search']) && ($_POST['valueToSearch'])> date("Y-m-d"))
{
    echo '<script language="javascript">';
    echo 'alert("Future date selected!! \n Please select date within April 12th and current date.")';
    echo '</script>';


}
else{
    $query = "SELECT * FROM sensorData";
}


// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "team15", "Dashboard");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

