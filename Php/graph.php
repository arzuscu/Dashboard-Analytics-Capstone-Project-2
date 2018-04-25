<?php
//index.php
$connect = mysqli_connect("localhost", "root", "team15", "Dashboard");
$query = '
SELECT humidity, temperature,
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM sensorData 
ORDER BY date DESC, time DESC
';
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
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

while($row = mysqli_fetch_array($result))
{
    $sub_array = array();
    $datetime = explode(".", $row["datetime"]);
    $sub_array[] =  array(
        "v" => 'Date(' . $datetime[0] . '000)'
    );
    $sub_array[] =  array(
        "v" => $row["humidity"]
    );
    $sub_array[] =  array(
        "v" => $row["temperature"]
    );

    $rows[] =  array(
        "c" => $sub_array
    );
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);

?>

