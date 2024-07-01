<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CustomFieldGroupMigration extends Migration
{
    public function up()
    {
        $fields = [
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'after' => 'created_at'
            ]
        ];
        $this->forge->addColumn('auth_groups_users', $fields);
    }

    public function down()
    {
        $fields = [
            'updated_at',
        ];
        $this->forge->dropColumn('auth_groups_users', $fields);
    }
}
