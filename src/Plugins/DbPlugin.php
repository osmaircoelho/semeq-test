<?php
declare(strict_types=1);

namespace Semeq\Plugins;

use Interop\Container\ContainerInterface;
use Semeq\Models\BillPay;
use Semeq\Models\BillReceive;
use Semeq\Models\User;
use Semeq\Repository\CategoryCostRepository;
use Semeq\Repository\RepositoryFactory;
use Semeq\Repository\StatementRepository;
use Semeq\ServiceContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

class DbPlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $capsule = new Capsule();
        $config = include __DIR__ .'/../../config/db.php';
        $capsule->addConnection($config['default_connection']);
        $capsule->bootEloquent();

        $container->add('repository.factory', new RepositoryFactory());

        $container->addLazy(
            'user.repository', function (ContainerInterface $container) {
                return $container->get('repository.factory')->factory(User::class);
            }
        );
    }

}
