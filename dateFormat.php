<?php

date_default_timezone_set('Asia/Dhaka');

$date=date_create("2023-03-08");

echo date_format($date,"Y/m/d h:i:sa");
echo "\n";
echo date("h:i:sa");

$a=2;
echo ++$a;

for($i=0;$i<=5;$i++){
 

    if($i==4){
        break;
    }
    echo $i;
    echo"\n";
}


$name=array('Soikat','Mehfuz','rahim','korim');

foreach($name as $val){
    echo $val;
    echo"\n";
}

//recurtion function

function display($number){
    if($number<=5){
        
        echo $number;
        display($number+1);
    }
}
display(2);



