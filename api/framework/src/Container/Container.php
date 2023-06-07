<?php

namespace Framework\Container;

use Framework\Container\ContainerException;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private array $services = [];

    public function add(string $id, string|object $concrete = null)
    {
        if (null === $concrete) {
            if (!class_exists($id)) {
                throw new ContainerException("service $id not founded");
            }
            $concrete = $id;
        }
        $this->services[$id] = $concrete;
    }

    public function get(string $id)
    {
        if (!$this->has($id)) {
            if (!class_exists($id)) {
                throw new ContainerException("service $id not be resolved");
            }

            $this->add($id);
        }
        $object = $this->resolve($this->services[$id]);

        return new $object;
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->services);
    }
}