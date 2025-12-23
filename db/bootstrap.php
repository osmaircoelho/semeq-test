<?php

use Semeq\Application;
use Semeq\Plugins\AuthPlugin;
use Semeq\Plugins\DbPlugin;
use Semeq\ServiceContainer;

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new DbPlugin());
$app->plugin(new AuthPlugin());
return $app;