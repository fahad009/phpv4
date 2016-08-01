<?php


$file = fopen("../csv/page.csv","r");



$csvFile = file("../csv/page.csv");
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}


print_r($data);
exit();


$data=[];

$data[0][0]="h1";
$data[0][1]="h2";
$data[0][3]="h3";


$data[1][0]="l1";
$data[1][1]="l2";
$data[1][3]="l3";


function outputCSV($data) {
    $output = fopen("../csv/page.csv", "w");
    foreach ($data as $row) {
        fputcsv($output, $row); // here you can change delimiter/enclosure
    }
    fclose($output);
}




outputCSV($data);






