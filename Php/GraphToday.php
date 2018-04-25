<?php
//index.php
$connect = mysqli_connect("localhost", "root", "team15", "Dashboard");
$query = '
SELECT humidity, temperature,
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM sensorData 
ORDER BY CURRENT_DATE DESC, time DESC
';
$result2 = mysqli_query($connect, $query);
$rows2 = array();
$table2 = array();

$table2['cols'] = array(
    array(
        'label' => 'Date Time',
        'type' => 'datetime'
    ),
    array(
        'label' => 'Humidity (%)',
        'type' => 'number'
    ),
    array(
        'label' => 'Temperature (°C)',
        'type' => 'number'
    )
);

while($row2 = mysqli_fetch_array($result2))
{
    $sub_array2 = array();
    $datetime2 = explode(".", $row2["datetime"]);
    $sub_array2[] =  array(
        "v" => 'Date(' . $datetime2[0] . '000)'
    );
    $sub_array2[] =  array(
        "v" => $row2["humidity"]
    );
    $sub_array2[] =  array(
        "v" => $row2["temperature"]
    );

    $rows2[] =  array(
        "c" => $sub_array2
    );
}
$table2['rows'] = $rows2;
$jsonTable2 = json_encode($table2);

?>

