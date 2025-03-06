<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    // Nome da tabela no banco de dados
    protected $table      = 'posts';

    // Chave primária da tabela
    protected $primaryKey = 'id';

    // Campos que podem ser manipulados
    protected $allowedFields = ['title', 'content', 'created_at', 'updated_at'];

    // Define as colunas de timestamp
    protected $useTimestamps = true;

    // Defina o formato de data (opcional, dependendo da sua configuração)
    protected $dateFormat = 'datetime';

    // Se quiser usar soft deletes, adicione esta linha
    // protected $useSoftDeletes = true;

    // Caso queira definir a validação, você pode usar:
    // protected $validationRules = [...];
    // protected $validationMessages = [...];

    // Caso precise de alguma configuração para eventos (exemplo, before insert)
    // protected $beforeInsert = ['hashPassword'];
}
