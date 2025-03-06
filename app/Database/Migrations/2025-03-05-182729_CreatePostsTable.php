<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'content'     => ['type' => 'TEXT', 'null' => false],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true); // Define 'id' como chave primária
        $this->forge->createTable('posts'); // Cria a tabela 'posts'
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
