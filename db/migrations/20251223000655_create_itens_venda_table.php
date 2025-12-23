<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateItensVendaTable extends AbstractMigration
{
    
    public function change(): void
    {
        $table = $this->table('itens_venda');
        $table->addColumn('venda_id', 'integer')
              ->addColumn('produto_id', 'integer')
              ->addColumn('quantidade', 'integer')
              ->addColumn('valor_unitario', 'decimal', ['precision' => 10, 'scale' => 2])
              ->addColumn('subtotal', 'decimal', ['precision' => 10, 'scale' => 2])
              ->addForeignKey('venda_id', 'vendas', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
              ->addForeignKey('produto_id', 'produtos', 'id', ['delete' => 'RESTRICT', 'update' => 'NO_ACTION'])
              ->create();
    }
}
