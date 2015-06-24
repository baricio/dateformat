# dateformat
Easy to format dates in PHP

 Examples
 ========

# format date

`$date = new DateFormat();`
`$date->getDate()` *m/d/Y (20/12/2015)*
`$date->getDateTime()` *m/d/Y H:i:s (20/12/2015 12:00:00)*
`$date->getDateMySQLDate()` *Y-m-d (2015-12-20)*
`$date->getDateMySQLDateTime()` *Y-m-d H:i:s (2015-12-20 12:00:00)*

# from predefined 02/28/2015

`date_formated = DateFormat::createFromFormat(DateFormat::$FORMAT_DATE,"02/28/2015");`
`$date_formated->getDateBR()` *m/d/Y (28/02/2015)*
`$date_formated->getDateTimeBR()` *m/d/Y H:i:s (28/02/2015 10:15:47)*
