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
                'title'      => 'Primeiro Post',
                'content'    => 'Conteúdo do primeiro post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Segundo Post',
                'content'    => 'Conteúdo do segundo post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Terceiro Post',
                'content'    => 'Conteúdo do terceiro post.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Inserir dados na tabela 'posts'
        $this->db->table('posts')->insertBatch($data);

        // Criar a tabela 'users' caso não exista
        $this->db->query('CREATE TABLE IF NOT EXISTS users (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )');

        // Dados para a tabela 'users'
        $userData = [
            [
                'name'      => 'João Silva',
                'email'     => 'joao@example.com',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            ],
            [
                'name'      => 'Maria Oliveira',
                'email'     => 'maria@example.com',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            ],
            [
                'name'      => 'Carlos Souza',
                'email'     => 'carlos@example.com',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s'),
            ],
        ];

        // Inserir dados na tabela 'users'
        $this->db->table('users')->insertBatch($userData);
    }
}
