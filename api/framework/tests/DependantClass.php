<?php

namespace Framework\Tests;

class DependantClass
{
    public function __construct(private DependencyClass $dependency)
    {
    }

    public function getDependeny(): DependencyClass
    {
        return $this->dependency;
    }

}