<?php
/**
 * Time
 * That is TimeTest class
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
use PHPUnit\Framework\TestCase;
use azibom\PhpTime\Time;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * TimeTest Class
 *
 * @category Class
 * @package  Time
 * @author   Azibom <mrsh13610@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

class TimeTest extends TestCase
{
    /**
     * Test now function
     *
     * @return void
     */
    public function testNow()
    {   
        $time = (new DateTime())->format('H:i:s');
        $this->assertSame(Time::now(), $time);

        $time = (new DateTime())->format('H:i:s');
        $this->assertSame(Time::now(), $time);
    }
}