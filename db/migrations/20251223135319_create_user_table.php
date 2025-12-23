<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{    
    public function change()
    {
         $this->table('users')
            ->addColumn('first_name', 'string')
            ->addColumn('last_name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addIndex(['email'], ['unique' => true])
            ->save();
    }
}
