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

$date_formated = DateFormat::createFromFormat(DateFormat::$FORMAT_DATE,"02/28/2015");
echo '<h1>Easy format date from predefined 02/28/2015 </h1>';
echo '<pre>';
echo $date_formated->getDate() . PHP_EOL;
echo $date_formated->getDateTime() . PHP_EOL;
echo $date_formated->getDateBR() . PHP_EOL;
echo $date_formated->getDateTimeBR() . PHP_EOL;
echo $date_formated->getDateMySQLDate() . PHP_EOL;
echo $date_formated->getDateMySQLDateTime() . PHP_EOL;
echo '</pre>';

$date_add = DateFormat::createFromFormat(DateFormat::$FORMAT_DATETIME,"02/28/2015 12:30:45");
echo '<h1>Easy way to update date </h1>';
echo '<h2>Example: add 32 days 2 months 5 years 3 hours 45 minutes 30 secons in 02/28/2015 12:30:45 </h2>';
echo '<pre>';
echo $date_add->addDay(32)->addMonth(2)->addYear(5)->addHour(3)->addMinute(45)->addSecond(30)->getDateMySQLDateTime();
echo '</pre>';