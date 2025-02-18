<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateurs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'email', 'mot_de_passe', 'role', 'date_creation'];
    protected $useTimestamps = true;

    // Validation des données
    protected $validationRules = [
        'nom'          => 'required|min_length[2]|max_length[100]',
        'prenom'       => 'required|min_length[2]|max_length[100]',
        'email'        => 'required|valid_email|is_unique[utilisateurs.email]',
        'passe'         => 'required|min_length[8]|max_length[255]',
        'confpasse' => 'required|matches[passe]', // Vérifie que confpasse est identique à passe
        'role'         => 'required|in_list[etudiant,enseignant,visiteur]',
    ];

    // Messages d'erreur personnalisés
    protected $validationMessages = [
        'nom' => [
            'required'    => 'Le champ nom est obligatoire.',
            'min_length'  => 'Le nom doit comporter au moins 2 caractères.',
            'max_length'  => 'Le nom ne doit pas dépasser 100 caractères.',
        ],
        'prenom' => [
            'required'    => 'Le champ prénom est obligatoire.',
            'min_length'  => 'Le prénom doit comporter au moins 2 caractères.',
            'max_length'  => 'Le prénom ne doit pas dépasser 100 caractères.',
        ],
        'email' => [
            'required'    => 'L\'adresse e-mail est obligatoire.',
            'valid_email' => 'Veuillez entrer une adresse e-mail valide.',
            'is_unique'   => 'Cette adresse e-mail est déjà enregistrée.',
        ],
        'passe' => [
            'required'    => 'Le mot de passe est obligatoire.',
            'min_length'  => 'Le mot de passe doit comporter au moins 8 caractères.',
            'max_length'  => 'Le mot de passe ne doit pas dépasser 255 caractères.',
        ],
        'role' => [
            'required'    => 'Le rôle est obligatoire.',
            'in_list'     => 'Le rôle doit être soit "etudiant", soit "enseignant", soit "visiteur".',
        ],
        'confpasse' => [
            'matches' => 'Le mot de passe doit etre identique avec la confirmation du mot de passe'
        ],
    ];

    // Optionnel: Si tu veux afficher des erreurs de validation dans une vue
    protected $skipValidation = false;  // Mettre à false pour activer la validation
}
