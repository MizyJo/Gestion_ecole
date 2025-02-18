<?php

namespace App\Models;

use CodeIgniter\Model;

class EtudiantModel extends Model
{
    protected $table = 'etudiants';
    protected $primaryKey = 'id';
    protected $allowedFields = ['utilisateur_id', 'date_naissance', 'adresse', 'classe_id'];
}
