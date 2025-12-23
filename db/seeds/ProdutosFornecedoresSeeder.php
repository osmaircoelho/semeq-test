<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ProdutosFornecedoresSeeder extends AbstractSeed
{
    
    public function run(): void
    {

        $data = [
            ['produto_id' => 1, 'fornecedor_id' => 1],
            ['produto_id' => 2, 'fornecedor_id' => 1],
            ['produto_id' => 2, 'fornecedor_id' => 2],
            ['produto_id' => 3, 'fornecedor_id' => 2],
        ];

        $this->table('produto_fornecedores')->insert($data)->save();
    }
}
