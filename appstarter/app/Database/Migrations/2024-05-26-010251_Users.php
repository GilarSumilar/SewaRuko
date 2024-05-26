<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'password' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'email' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
                'null' => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
