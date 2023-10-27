<?php

namespace Tests\Domain\Entity;

use Domain\Entity\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Uid\Uuid;

class UserTest extends TestCase
{

    public function testUserConstructor()
    {
        $id = Uuid::v1();
        $user = new User($id, 'rouan', 'rouan.laporal@gmail.com', []);
        $this->assertInstanceOf('Domain\Entity\User', $user);
    }

    public function testGetUserEmail()
    {
        $id = Uuid::v1();
        $user = new User($id, 'rouan', 'rouan.laporal@gmail.com', []);
        $user_email = $user->getEmail();
        $this->assertEquals('rouan.laporal@gmail.com', $user_email);
    }

    public function testGetUserName()
    {
        $id = Uuid::v1();
        $user = new User($id, 'rouan', 'rouan.laporal@gmail.com', []);
        $user_name = $user->getName();
        $this->assertEquals('rouan', $user_name);
    }

    // public function testGetSkills()
    // {
    //     $user_skills = $user->getSkills();
    //     $this->assertEquals(['programming'], $user_skills);
    // }
}
