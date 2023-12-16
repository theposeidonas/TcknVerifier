<?php

namespace theposeidonas\TcknVerifier\Tests\Feature;

use Orchestra\Testbench\TestCase;
use Theposeidonas\TcknVerifier\Verify;

class InitialTest extends TestCase
{
    /**
     * @test
     */
    public function testPerson()
    {
        $this->assertTrue(Verify::person('11111111111', 'isim', 'soyisim','1997'));
    }
    /**
     * @test
     */
    public function testTckn()
    {
        $this->assertTrue(Verify::tckn('11111111111'));
    }

}