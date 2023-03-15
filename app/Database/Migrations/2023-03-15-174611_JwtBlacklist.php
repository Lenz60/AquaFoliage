<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JwtBlacklist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'token' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'logout_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jwtblacklist');
    }

    public function down()
    {
        $this->forge->dropTable('jwtblacklist');
    }
}
