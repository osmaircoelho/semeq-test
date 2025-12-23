<?php

namespace Semeq\Plugins;


use Semeq\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container );
}