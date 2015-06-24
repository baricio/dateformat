<?php

require_once 'DateFormat.php';

use baricio\util\DateFormat;

$date = new DateFormat();

echo '<h1>Easy format date</h1>';
echo '<pre>';
echo $date->getDate() . PHP_EOL;
echo $date->getDateTime() . PHP_EOL;
echo $date->getDateBR() . PHP_EOL;
echo $date->getDateTimeBR() . PHP_EOL;
echo $date->getDateMySQLDate() . PHP_EOL;
echo $date->getDateMySQLDateTime() . PHP_EOL;
echo '</pre>';

$date_formated = DateFormat::createFromFormat(DateFormat::$FORMAT_DATE, "02/28/2015");
echo '<h1>Easy format from predefined date 02/28/2015 </h1>';
echo '<pre>';
echo $date_formated->getDate() . PHP_EOL;
echo $date_formated->getDateTime() . PHP_EOL;
echo $date_formated->getDateBR() . PHP_EOL;
echo $date_formated->getDateTimeBR() . PHP_EOL;
echo $date_formated->getDateMySQLDate() . PHP_EOL;
echo $date_formated->getDateMySQLDateTime() . PHP_EOL;
echo '</pre>';
