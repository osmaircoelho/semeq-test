<?php
declare(strict_types=1);

namespace Semeq\Repository;

//funcao dessa classe eh gerar um nova funcao do nosso repositorio
class RepositoryFactory
{
    public static function factory(string $modelClass)
    {
        return new DefaultRepository($modelClass);
    }
}
