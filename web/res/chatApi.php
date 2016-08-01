<?php


$csvFile = file("../csv/chat.csv");
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}



$data_return='[';
$data_return.= '{"chat":"'. addslashes($data[0][1]).'","accessToken":"'. addslashes($data[0][2]).'"},{"chat":"'. addslashes($data[1][1]).'","accessToken":"'. addslashes($data[1][2]).'"},{"chat":"'. addslashes($data[2][1]).'","accessToken":"'. addslashes($data[2][2]).'"},{"chat":"'. addslashes($data[3][1]).'","accessToken":"'. addslashes($data[3][2]).'"},{"chat":"'. addslashes($data[4][1]).'","accessToken":"'. addslashes($data[4][2]).'"},';
$data_return.="]";

echo($data_return);


?>









