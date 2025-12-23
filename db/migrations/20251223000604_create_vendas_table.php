<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateVendasTable extends AbstractMigration
{
    
    public function change(): void
    {
        $table = $this->table('vendas');
        $table->addColumn('cliente_id', 'integer')
              ->addColumn('data_venda', 'datetime')
              ->addColumn('cep', 'string', ['limit' => 10])
              ->addColumn('logradouro', 'string', ['limit' => 150])
              ->addColumn('numero', 'string', ['limit' => 20])
              ->addColumn('complemento', 'string', ['limit' => 100, 'null' => true])
              ->addColumn('bairro', 'string', ['limit' => 100])
              ->addColumn('cidade', 'string', ['limit' => 100])
              ->addColumn('uf', 'string', ['limit' => 2])
              ->addColumn('valor_total', 'decimal', ['precision' => 10, 'scale' => 2, 'default' => 0.00])
              ->addTimestamps()
              ->addForeignKey('cliente_id', 'clientes', 'id', ['delete' => 'RESTRICT', 'update' => 'NO_ACTION'])
              ->create();
    }
}
