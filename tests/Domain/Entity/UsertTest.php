<?php

namespace Tests\Domain\Entity;

use Domain\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUserInstance()
    {
        $user = new User('rouan', 'rouan.laporal@gmail.com');
        $this->assertInstanceOf('Domain\Entity\User', $user);
    }

    public function testGetUserEmail()
    {
        $user = new User('rouan', 'rouan.laporal@gmail.com');
        $user_email = $user->getEmail();
        $this->assertEquals('rouan.laporal@gmail.com', $user_email);
    }

    public function testGetUserName()
    {
        $user = new User('rouan', 'rouan.laporal@gmail.com');
        $user_name = $user->getName();
        $this->assertEquals('rouan', $user_name);
    }
}
