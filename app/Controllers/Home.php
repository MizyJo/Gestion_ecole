<?php

namespace App\Controllers;
use App\Models\UtilisateurModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('accueil.php');
    }

    public function login_view()
    {
        return view('login.php');
    }

    public function register_view()
    {
        return view('register.php');
    }

    public function register()
    {
        helper(['form', 'url']);

        var_dump($this->request->getMethod() ==='POST');
        if ($this->request->getMethod() === 'POST') {
            $utilisateurModel = new UtilisateurModel();


            // Validation des données
            if ($this->validate($utilisateurModel->validationRules)) {
                // Hachage du mot de passe avant l'insertion
                $motDePasse = password_hash($this->request->getPost('passe'), PASSWORD_DEFAULT);

                $utilisateurModel->save([
                    'nom'          => $this->request->getPost('nom'),
                    'prenom'       => $this->request->getPost('prenom'),
                    'email'        => $this->request->getPost('email'),
                    'mot_de_passe' => $motDePasse,
                    'role'         => $this->request->getPost('role'),
                ]);
                var_dump("Inscription réussie");

                return redirect()->to('/register')->with('success', 'Utilisateur enregistré avec succès');
            } else {
                // Retourner à la vue avec les erreurs de validation
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }

        return view('/register');
    }

}
