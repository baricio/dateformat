<?php

namespace baricio\util;

/**
 * Class to retrieve the easy way of date format only with methods call
 *
 * @author baricio@gmail.com
 */
class DateFormat {

    //Current formats to date
    public static $FORMAT_DATE = "m/d/Y";
    public static $FORMAT_DATETIME = "m/d/Y H:i:s";
    public static $FORMAT_BR_DATE = "d/m/Y";
    public static $FORMAT_BR_DATETIME = "d/m/Y H:i:s";
    public static $FORMAT_MYSQL_DATE = "Y-m-d";
    public static $FORMAT_MYSQL_DATETIME = "Y-m-d H:i:s";
    //Instance of DateTime PHP Class
    private $date;

    /**
     * Create new instance of DateTime PHP Class
     */
    public function __construct() {
        $this->date = new \DateTime('now');
    }

    /**
     * Create new instance of DateTime PHP Class with format and time
     * @param string $format DateFormat static property
     * @param strine $time timestamp
     * @return \self
     */
    public static function createFromFormat($format, $time) {
        $instance = new self();
        $instance->date = \DateTime::createFromFormat($format, $time);
        return $instance;
    }
    
    /**
     * Add days to current datetime
     * @param int $days
     * @return \baricio\util\DateFormat
     */
    public function addDay($days){
        $this->date->add(new \DateInterval('P'. $days .'D'));
        return $this;
    }
    
    /**
     * Add months to current datetime
     * @param int $months
     * @return \baricio\util\DateFormat
     */
    public function addMonth($months){
        $this->date->add(new \DateInterval('P'. $months .'M'));
        return $this;
    }
    
    /**
     * Add years to current datetime
     * @param int $years
     * @return \baricio\util\DateFormat
     */
    public function addYear($years){
        $this->date->add(new \DateInterval('P'. $years .'Y'));
        return $this;
    }
    
    /**
     * Add hours to current datetime
     * @param int $hours
     * @return \baricio\util\DateFormat
     */
    public function addHour($hours){
        $this->date->add(new \DateInterval('PT'. $hours .'H'));
        return $this;
    }
    
    /**
     * Add minutes to current datetime
     * @param int $minutes
     * @return \baricio\util\DateFormat
     */
    public function addMinute($minutes){
        $this->date->add(new \DateInterval('PT'. $minutes .'M'));
        return $this;
    }
    
    /**
     * Add seconds to current datetime
     * @param int $seconds
     * @return \baricio\util\DateFormat
     */
    public function addSecond($seconds){
        $this->date->add(new \DateInterval('PT'. $seconds .'S'));
        return $this;
    }

    /**
     * Return date m/d/Y
     * @return string date
     */
    public function getDate() {
        return $this->date->format(self::$FORMAT_DATE);
    }

    /**
     * Return date m/d/Y H:i:s
     * @return string date
     */
    public function getDateTime() {
        return $this->date->format(self::$FORMAT_DATETIME);
    }

    /**
     * Return date d/m/Y
     * @return string date
     */
    public function getDateBR() {
        return $this->date->format(self::$FORMAT_BR_DATE);
    }

    /**
     * Return date d/m/Y H:i:s
     * @return string date
     */
    public function getDateTimeBR() {
        return $this->date->format(self::$FORMAT_BR_DATETIME);
    }

    /**
     * Return date Y-m-d
     * @return string date
     */
    public function getDateMySQLDate() {
        return $this->date->format(self::$FORMAT_MYSQL_DATE);
    }

    /**
     * Return date Y-m-d H:i:s
     * @return string date
     */
    public function getDateMySQLDateTime() {
        return $this->date->format(self::$FORMAT_MYSQL_DATETIME);
    }

}
