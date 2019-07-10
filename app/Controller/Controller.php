<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;

class Controller
{
    /**
     * Container instance
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Controller constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}