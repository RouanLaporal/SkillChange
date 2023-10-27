<?php

declare(strict_types=1);

namespace Domain\Contract;

use Domain\Entity\User;

interface UserRepository
{
    public function save(User $user): void;
}
