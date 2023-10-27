<?php

declare(strict_types=1);

namespace Domain\Entity;

use Symfony\Component\Uid\Uuid;


class User
{
    private Uuid $id;
    private string $name;
    private string $email;
    // private array $skills;

    public function __construct(Uuid $id, string $name, string $email, $skills)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        // $this->skills = $skills;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    // public function getSkills(): array
    // {
    //     return $this->skills;
    // }
}
