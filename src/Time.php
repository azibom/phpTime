<?php
/**
 * Time
 * That is main Time class
 * php version 7.2
 *
 * @category   Class
 * @package    Time
 * @subpackage Time
 * @author     Azibom <mrsh13610@gmail.com>
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/azibom
 * @since      1.0.0
 */

namespace azibom\PhpTime;

use DateTime;
use DateTimeZone;

/**
 * Time Class
 *
 * @category Class
 * @package  Time
 * @author   Azibom <mrsh13610@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
class Time
{
    /**
     * The hour, in the range 0 to 23.
     *
     * @var int
     */
    private $_hour;

    /**
     * The minute, in the range 0 to 59.
     *
     * @var int
     */
    private $_minute;

    /**
     * The second, in the range 0 to 59.
     *
     * @var int
     */
    private $_second;

    /**
     * The timezone.
     *
     * @var string
     */
    private static $_timezone;

    /**
     * Private constructor. Use getInstance() to obtain an instance.
     *
     * @param int $hour   The hour-of-day.
     * @param int $minute The minute-of-hour.
     * @param int $second The second-of-minute.
     */
    private function __construct(int $hour, int $minute, int $second)
    {
        $this->_hour   = $hour;
        $this->_minute = $minute;
        $this->_second = $second;
    }

    /**
     * Get current time.
     *
     * @return string
     */
    public static function now(): string
    {
        $time = self::_getDateTime();
        $time = self::_checkTimezone($time);
        return $time->format('H:i:s');
    }

    /**
     * Make new instance of DateTime.
     *
     * @return object
     */
    private static function _getDateTime(): DateTime
    {
        return new DateTime();
    }

    /**
     * Check time zone.
     *
     * @param DateTime $time DateTime object.
     *
     * @return void
     */
    private static function _checkTimezone(DateTime $time): DateTime
    {
        if (static::$_timezone instanceof DateTimeZone) {
            $time->setTimezone(static::$_timezone);
        }
        return $time;
    }


    /**
     * Set timezone.
     *
     * @param String $timezone The timezone to set to.
     *
     * @return void
     */
    public function setTimezone(String $timezone): void
    {
        static::$_timezone = new DateTimeZone($timezone);
    }
}
