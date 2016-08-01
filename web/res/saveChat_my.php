<?php



$data=[];

$data[0][0]="userfuck";
$data[0][2]="okay";
$data[0][3]="fuck3";


$data[1][0]="userfuck";
$data[1][2]="okay";
$data[1][3]="fuck3";


$data[2][0]="userfuck";
$data[2][2]="okay";
$data[2][3]="fuck3";

$data[3][0]="userfuck";
$data[3][2]="okay";
$data[3][3]="fuck3";

$data[4][0]="userfuck";
$data[4][2]="okay";
$data[4][3]="fuck3";



function outputCSV($data) {
    $output = fopen("../csv/chat.csv", "w");
    foreach ($data as $row) {
        fputcsv($output, $row); // here you can change delimiter/enclosure
    }
    fclose($output);
}




outputCSV($data);


exit();



?>









