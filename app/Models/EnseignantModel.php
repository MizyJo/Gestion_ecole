<?php

namespace App\Models;

use CodeIgniter\Model;

class EnseignantModel extends Model
{
    protected $table = 'enseignants';
    protected $primaryKey = 'id';
    protected $allowedFields = ['utilisateur_id', 'matiere'];
}
