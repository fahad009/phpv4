<?php



$data=[];

$data[0][0]="Admin1";
$data[0][1]="gordon001";
$data[0][3]="share1";

$data[1][0]="Admin2";
$data[1][1]="john002";
$data[1][3]="share1";

$data[2][0]="Admin3";
$data[2][1]="michael003";
$data[2][3]="share1";

$data[3][0]="Admin4";
$data[3][1]="tom004";
$data[3][3]="share1";

$data[4][0]="Admin5";
$data[4][1]="liam005";
$data[4][3]="share1";



function outputCSV($data) {
    $output = fopen("../csv/login.csv", "w");
    foreach ($data as $row) {
        fputcsv($output, $row); // here you can change delimiter/enclosure
    }
    fclose($output);
}




outputCSV($data);




?>









