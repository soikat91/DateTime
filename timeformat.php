<?php
//H -24 hour format 00-24
//h -12 hour format 01-12
//i -minutes format 00-59
//s-seconds format 00-59
//a -am or pm

date_default_timezone_set("Asia/Dhaka");//time zone set kore daoya lagbe

echo date("h:i:sa");