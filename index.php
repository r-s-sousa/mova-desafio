<?php

ini_set('display_errors', true);

use Rafael\Mova\DayWeek;
use Rafael\Mova\Show;

require __DIR__."/vendor/autoload.php";

$dates = [
   1 => 'Domingo',
   2 => 'Segunda-feira',
   3 => 'Terça-feira',
   4 => 'Quarta-feira',
   5 => 'Quinta-feira',
   6 => 'Sexta-feira',
   7 => 'Sábado',
];

$events = [
   1 => '',
   2 => 'da Proclamação da república',
   3 => 'dos Finados',
   4 => '',
   5 => 'das crianças',
   6 => 'de codificar :)',
   7 => ''
];

$obDayWeek = new DayWeek();
$obShow = new Show($obDayWeek);
$obShow->setDates($dates);
$obShow->setEvents($events);
$obShow->showEventsWeek();
