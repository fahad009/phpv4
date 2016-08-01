<?php




$data_return='[';

$file = fopen("../csv/page.csv","r");



$csvFile = file("../csv/page.csv");
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}


$data_return.= '{"page":"'. addslashes($data[0][1]).'","user":"'. addslashes($data[0][2]).'"}';

$data_return.="]";

echo($data_return);









