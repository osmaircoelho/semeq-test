<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ClientesSeeder extends AbstractSeed
{
    public function run(): void
    {
       $data = [
            [
                'nome'    => 'Fulano de tal',
                'email'   => 'Falano@email.com',
                'telefone'=> '11999999999',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome'    => 'Maria Oliveira',
                'email'   => 'maria@gmail.com',
                'telefone'=> '21988888888',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $this->table('clientes')->insert($data)->save(); 
    }
}
