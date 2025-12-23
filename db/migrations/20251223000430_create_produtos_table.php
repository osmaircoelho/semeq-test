<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProdutosTable extends AbstractMigration
{
    
    public function change(): void
    {
        $table = $this->table('produtos');
        $table->addColumn('nome', 'string', ['limit' => 100])
              ->addColumn('descricao', 'text', ['null' => true])
              ->addColumn('preco', 'decimal', ['precision' => 10, 'scale' => 2])
              ->addTimestamps()
              ->create();
    }
}
