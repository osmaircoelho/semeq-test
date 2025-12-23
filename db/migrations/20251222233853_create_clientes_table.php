<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateClientesTable extends AbstractMigration
{
    
    public function change(): void
    {
        $table = $this->table('clientes');
        $table->addColumn('nome', 'string', ['limit' => 100])
              ->addColumn('email', 'string', ['limit' => 100, 'null' => true])
              ->addColumn('telefone', 'string', ['limit' => 20, 'null' => true])
              ->addTimestamps()
              ->create();
    }
}
