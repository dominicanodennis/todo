<?php

/**
 * Created by PhpStorm.
 * User: preacher
 * Date: 09.09.15
 * Time: 20:35
 */
require_once 'controller/todoController.php';

class cononeTest extends PHPUnit_Framework_TestCase
{

    public function testCan()
    {
        $ba = new test;
        $ba->summe(8);
        $this->assertEquals(20, $ba->wasda(), $message='Zwannzig');
    }

}
