<?php

namespace App\Models;

use CodeIgniter\Model;

class ClasseModel extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'niveau', 'capacite'];
}
