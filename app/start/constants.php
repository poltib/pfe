<?php

use Carbon\Carbon as Carbon;

define('YEAR', Carbon::now()->year);

$month =  Carbon::now()->month;

if(strlen($month) === 1){
    $month = "0".$month;
}

define('MONTH', $month);


