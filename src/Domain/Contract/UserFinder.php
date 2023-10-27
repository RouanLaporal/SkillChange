<?php

declare(strict_types=1);

namespace Domain\Contract;

use Domain\Entity\User;

interface UserFinder
{
    /** @return User[] */
    public function findAll(): array;

    /** @return User */
    public function findOne(): User;
}
