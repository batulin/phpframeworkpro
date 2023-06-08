<?php

namespace Framework\Tests;
use Framework\Container\Container;
use Framework\Container\ContainerException;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    /** @test */
    public function a_service_can_be_retrieved_from_the_container()
    {
        $container = new Container();

        $container->add('dependant-class', DependantClass::class);

        $this->assertInstanceOf(DependantClass::class, $container->get('dependant-class'));
    }

    /** @test */
    public function a_ContainerException_is_thrown_if_a_service_cannot_be_found()
    {
        $container = new Container();

        $this->expectException(ContainerException::class);

        $container->add('foobar');
    }

    /** @test */
    public function can_check_if_the_container_has_a_service(): void
    {
        $container = new Container();

        $container->add('dependant-class', DependantClass::class);

        $this->assertTrue($container->has('dependant-class'));
        $this->assertFalse($container->has('dependent-class'));
    }

    /** @test */
    public function services_can_be_recursively_autowired()
    {
        $container = new Container();

        $dependantService = $container->get(DependantClass::class);

        $dependancyService = $dependantService->getDependency();

        $this->assertInstanceOf(DependencyClass::class, $dependancyService);
        $this->assertInstanceOf(SubDependencyClass::class, $dependancyService->getSubDependency());
    }

}