<?php

namespace App\Models;

use CodeIgniter\Model;

class FileDetails extends Model {
    protected $table = "file_details";
    protected $primaryKey = "id";
    protected $returnType = 'array';

    protected $allowedFields = [
        'id',
        'name',
        'type',
        'size',
        'path'
    ];
}