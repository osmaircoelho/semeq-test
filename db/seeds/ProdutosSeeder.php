<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ProdutosSeeder extends AbstractSeed
{
    
    public function run(): void
    {
        $data = [
            ['nome' => 'Notebook Dell', 'descricao' => 'i5, 8GB RAM', 'preco' => 3500.00, 'created_at' => date('Y-m-d H:i:s')],
            ['nome' => 'Mouse Logitech', 'descricao' => 'Sem fio', 'preco' => 80.00, 'created_at' => date('Y-m-d H:i:s')],
            ['nome' => 'Monitor LG', 'descricao' => '24 polegadas', 'preco' => 800.00, 'created_at' => date('Y-m-d H:i:s')],
        ];

        $this->table('produtos')->insert($data)->save();
    }
}
