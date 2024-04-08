<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'service_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
            ],
            'name_service' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'price' => [
                'type' => 'decimal',
                'constraint' => '20,2',
                'null' => true
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('service_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('tbl_services');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_services');
    }
}
