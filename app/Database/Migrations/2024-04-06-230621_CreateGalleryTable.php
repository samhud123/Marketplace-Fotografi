<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGalleryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'gallery_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'photo' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('gallery_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('tbl_gallery');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_gallery');
    }
}
