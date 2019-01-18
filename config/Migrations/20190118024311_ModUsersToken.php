<?php
use Migrations\AbstractMigration;

class ModUsersToken extends AbstractMigration
{

    public function up()
    {

        $this->table('users')
            ->changeColumn('token', 'string', [
                'default' => null,
                'limit' => 60,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('users')
            ->changeColumn('token', 'string', [
                'default' => null,
                'length' => 60,
                'null' => false,
            ])
            ->update();
    }
}

