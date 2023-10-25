<?php

declare(strict_types=1);

namespace Domain\Ports\Example;

use Domain\Contract\ExampleFinder;
use Domain\Entity\Example;

class ListExample
{
    private ExampleFinder $finder;
    public function __construct(
        ExampleFinder $finder
    ) {
        $this->finder = $finder;
    }

    /** @return Example[] */
    public function list(): array
    {
        return $this->finder->findAll();
    }

    /** @return Example[] */
    public function listStandard(): array
    {
        return $this->finder->findStandard();
    }
}
