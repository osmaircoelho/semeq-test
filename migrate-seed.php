<?php
exec(__DIR__ . '/vendor/bin/phinx rollback -t 0');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s ClientesSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s FornecedoresSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s ProdutosSeeder');
exec(__DIR__ . '/vendor/bin/phinx seed:run -s ProdutosFornecedoresSeeder');
