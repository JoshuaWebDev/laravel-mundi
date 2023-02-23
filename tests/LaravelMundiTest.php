<?php

namespace JoshuaWebDev;

use PHPUnit\Framework\TestCase;

class LaravelMundiTest extends TestCase
{
    public function testIfShowMessage()
    {
        $mundi = new LaravelMundi;
        
        $atual = $mundi->helloWorld();
        $expected = 'Hello World!';

        $this->assertEquals($expected, $atual);
    }
}