<?php


$accossToken= $_GET["accossToken"];
$usser_comment= $_GET["usser_comment"];


$csvFile = file("../csv/chat.csv");
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}

$i=0;


foreach($data as $da){


    $data[$i][0]=$da[0];
    $data[$i][1]=$da[1];
    $data[$i][2]=$da[2];

    $i++;

}


$value=substr($accossToken, -1);

if($value==1){
    $valueA=1;
    $value--;

    $data[$value][0]="User".$valueA;
    $data[$value][1]=$usser_comment;
    $data[$value][2]=$accossToken;

}else if($value==2){

    $valueA=2;
    $value--;

    $data[$value][0]="User".$valueA;
    $data[$value][1]=$usser_comment;
    $data[$value][2]=$accossToken;

}else if($value==3){
    $valueA=3;
    $value--;

    $data[$value][0]="User".$valueA;
    $data[$value][1]=$usser_comment;
    $data[$value][2]=$accossToken;

}else if($value==4){
    $valueA=4;
    $value--;

    $data[$value][0]="User".$valueA;
    $data[$value][1]=$usser_comment;
    $data[$value][2]=$accossToken;

}else if($value==5){
    $valueA=5;
    $value--;

    $data[$value][0]="User".$valueA;
    $data[$value][1]=$usser_comment;
    $data[$value][2]=$accossToken;

}




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









