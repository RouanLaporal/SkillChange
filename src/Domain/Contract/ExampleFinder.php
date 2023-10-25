<?php

declare(strict_types=1);

namespace Domain\Contract;

use Domain\Entity\Example;

interface ExampleFinder
{
    /** @return Example[] */
    public function findAll(): array;

    /** @return Example[] */
    public function findStandard(): array;
}
