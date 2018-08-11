<?php

namespace Mzur\Kirby\DefuseSession\Tests;

use Kirby\Cms\App;
use ErrorException;
use Mzur\Kirby\DefuseSession\Defuse;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public function testNoDefuse()
    {
        $this->expectException(\ErrorException::class);
        App::instance()->session()->set('testKey', 'testValue');
    }

    public function testDefuse()
    {
        Defuse::defuse();
        $session = App::instance()->session();
        $session->set('testKey', 'testValue');
        $this->assertEquals('testValue', $session->get('testKey'));
        $this->assertEquals('testValue', $session->pull('testKey'));
        $this->assertNull($session->get('testKey'));
    }

    public function testOptions()
    {
        Defuse::defuse(['options' => ['debug' => true]]);
        $this->assertTrue(App::instance()->option('debug'));
    }
}
