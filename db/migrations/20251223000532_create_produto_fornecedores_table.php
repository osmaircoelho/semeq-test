<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProdutoFornecedoresTable extends AbstractMigration
{
   
    public function change(): void
    {
        $table = $this->table('produto_fornecedores', ['id' => false, 'primary_key' => ['produto_id', 'fornecedor_id']]);
        $table->addColumn('produto_id', 'integer', ['null' => false])
              ->addColumn('fornecedor_id', 'integer', ['null' => false])
              ->addForeignKey('produto_id', 'produtos', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
              ->addForeignKey('fornecedor_id', 'fornecedores', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
              ->create();
    }
}
