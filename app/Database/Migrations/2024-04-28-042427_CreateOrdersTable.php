<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'buyer_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'mitra_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'service_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'date' => [
                'type'       => 'DATE',
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'confirm' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'null' => 0,
                'default' => 0
            ],
            'status_order' => [
                'type' => 'ENUM',
                'constraint' => "'process','approved','finished', 'rejected'",
                'default' => 'process'
            ],
            'created_at'    => ['type' => 'datetime', 'null' => true],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('order_id', true);
        $this->forge->addForeignKey('buyer_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('mitra_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('service_id', 'tbl_services', 'service_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_orders');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_orders');
    }
}
