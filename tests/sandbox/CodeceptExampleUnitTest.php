<?php
namespace App\Tests;

use \Codeception\Test\Unit;
use App\Tests\UnitTester;

class CodeceptExampleUnitTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(false);
    }
}
