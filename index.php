<?php

ini_set('display_errors', true);

use Rafael\Mova\DayWeek;
use Rafael\Mova\Show;

require __DIR__."/vendor/autoload.php";

$obDayWeek = new DayWeek();
$obShow = new Show($obDayWeek);
$obShow->setDates([1 => 'Segunda-feira']);
$obShow->setEvents([1 => 'finados']);
$obShow->showEventsWeek();

echo "<pre>";
print_r($obShow);   
echo "</pre>";
