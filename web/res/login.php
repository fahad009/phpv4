<?php


$data_return='[';

$name= $_GET["accossToken"];
$pass= $_GET["pass"];

$name= strtolower ( $name );
$pass= strtolower (  $pass );


$csvFile = file("../csv/login.csv");
$data = [];
foreach ($csvFile as $line) {
    $data[] = str_getcsv($line);
}

foreach($data as $da){


    if ($da[1]==$name && $da[2]==$pass){
        echo 1;
        exit();
    }else{

    }



}
echo 0;

exit();

?>









