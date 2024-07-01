<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CustomFieldUsersMigration extends Migration
{
    public function up()
    {
        $fields = [
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'null' => false,
                'after' => 'username',
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
                'after' => 'phone_number'
            ],
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $fields = [
            'phone_number',
            'photo'
        ];
        $this->forge->dropColumn('users', $fields);
    }
}
