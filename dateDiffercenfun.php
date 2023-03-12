<?php
//date_diff er function er mordhe 2 ta day er differnce koto ta bar kora jay..eta return kore 2 ta date time object
//R -negative value
//a-absulate value or possitve value
$date1=date_create("2021-09-11");
$date2=date_create("2023-03-08");
$differcenDate=date_diff($date1,$date2);

echo $differcenDate->format("%R%a days");