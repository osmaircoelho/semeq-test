<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatefornecedoresTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('fornecedores');
        $table->addColumn('nome', 'string', ['limit' => 100])
              ->addColumn('cnpj', 'string', ['limit' => 20, 'null' => true])
              ->addTimestamps()
              ->create();
    }
}
