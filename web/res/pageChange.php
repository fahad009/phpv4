<?php


$page= $_GET["page"];
$user= $_GET["user"];


$data=[];

$data[0][0]="page";
$data[0][1]=$page;
$data[0][3]=$user;



function outputCSV($data) {
    $output = fopen("../csv/page.csv", "w");
    foreach ($data as $row) {
        fputcsv($output, $row); // here you can change delimiter/enclosure
    }
    fclose($output);
}




outputCSV($data);


echo "1";






