<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `sensorData` WHERE date LIKE '%".$valueToSearch."%' ORDER BY id DESC" ;
    $search_result = filterTable($query);
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