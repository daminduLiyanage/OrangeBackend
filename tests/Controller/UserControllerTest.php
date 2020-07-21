<?php

namespace App\Tests\Util;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserControllerTest extends TestCase
{
    public function testAssertUsr(){
        $user = new user;
        $user->setUsername('dmax')->setPassword('434')->setFkEmpId(9);

        $this->assertEquals($user->getUsername(), 'dmax');
        $this->assertEquals($user->getPassword(), '434');
        $this->assertEquals($user->getFkEmpId(), 9);
    }
}