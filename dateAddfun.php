<?php
//date_add function er kaj holo date_create kore sei date er shate amra je date set korbo ta add kore koto hobe ta dekhay
$date=date_create('2021-09-11');

date_add($date,date_interval_create_from_date_string('5 year'));
echo date_format($date,"Y/m/d");