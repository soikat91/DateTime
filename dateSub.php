<?php
//date_sub function set kora date theke create date bad dey

$date=date_create("2023-3-8");

date_sub($date,date_interval_create_from_date_string('1 year'));

echo date_format($date,"Y-m-d");
