<?php
/**
 * Created by PhpStorm.
 * User: 16LEBELLOURM
 * Date: 18/12/2017
 * Time: 08:41
 */

namespace StPaulV1\src\stpaul;
use stpaul\Sejour;

require_once __DIR__.'\..\..\src\stpaul\Sejour.php';

class SejourTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var sejour
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Sejour(1, 'Classe de mer', 170, '2016-05-02', 10);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    public function testDteFin()
    {
        $this->setUp(1, 'Classe de mer', 170, '2016-05-02', 10);

        $resultatAttendu = '2016-05-12';
        $resultatObserve = $this->object->getSejDteFin();

        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
}

