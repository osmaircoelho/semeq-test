<?php
require __DIR__ . '/vendor/autoload.php';

if(file_exists(__DIR__ .'/.env')) {
    $dotenv = new \Dotenv\Dotenv(__DIR__);
    $dotenv->overload();
}

$dbConfig = include __DIR__ . '/config/db.php';
$config = $dbConfig['default_connection'];

echo "Resetando banco de dados...\n";

try {
    $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
    $pdo = new PDO($dsn, $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
    
    
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    foreach ($tables as $table) {
        $pdo->exec("DROP TABLE IF EXISTS `$table`");
        echo "Dropped database $table\n";
    }
    
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
    echo "Database resetado.\n\n";

} catch (PDOException $e) {
    echo "Erro ao resetar banco de dados: " . $e->getMessage() . "\n";
    exit(1);
}


function run_phinx($args) {
    
    $cmd = 'php "' . __DIR__ . '/vendor/bin/phinx" ' . $args;
    
    passthru($cmd, $returnVar);
    if ($returnVar !== 0) {
        echo "Command failed: $cmd\n";
        exit($returnVar);
    }
}

echo "Rodando migrations...\n";

run_phinx('migrate');

echo "Rodando seeds...\n";
run_phinx('seed:run -s UsersSeeder');
run_phinx('seed:run -s ClientesSeeder');
run_phinx('seed:run -s FornecedoresSeeder');
run_phinx('seed:run -s ProdutosSeeder');
run_phinx('seed:run -s ProdutosFornecedoresSeeder');

echo "Done 😎 \n";
