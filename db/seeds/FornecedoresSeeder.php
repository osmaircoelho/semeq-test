<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class FornecedoresSeeder extends AbstractSeed
{

    public function run(): void
    {
        $data = [
            ['nome' => 'Semeq', 'cnpj' => '00.000.000/0001-01', 'created_at' => date('Y-m-d H:i:s')],
            ['nome' => 'Ozzy Atacado', 'cnpj' => '11.111.111/0001-11', 'created_at' => date('Y-m-d H:i:s')],
        ];

        $this->table('fornecedores')->insert($data)->save();
    }
}
