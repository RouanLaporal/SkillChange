<?php

declare(strict_types=1);

namespace Domain\Entity;

class User
{
    private string $name;
    private string $email;
    private array $skills;

    public function __construct(string $name, string $email, $skills)
    {
        $this->name = $name;
        $this->email = $email;
        $this->skills = $skills;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSkills(): array
    {
        return $this->skills;
    }
}
