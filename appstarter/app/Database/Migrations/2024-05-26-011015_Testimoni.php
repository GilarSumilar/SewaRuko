<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimoni extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => false,
            ],
            'id_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'rating' => [
                'type'       => 'INT',
                'constraint' => 5,
                'null'       => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'users', 'id', 'cascade', 'cascade', 'id_user_users_id');
        $this->forge->createTable('testimoni');
    }

    public function down()
    {
        $this->forge->dropTable('testimoni');
    }
}
