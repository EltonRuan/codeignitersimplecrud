<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run()
    {
        // Dados para a tabela 'posts'
        $data = [
            [
                'title'      => 'First Post',
                'content'    => 'Content of the first post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Second Post',
                'content'    => 'Content of the second post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Third Post',
                'content'    => 'Content of the third post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserir dados na tabela 'posts'
        $this->db->table('posts')->insertBatch($data);

    }
}
