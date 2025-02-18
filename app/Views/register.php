<?= $this->extend("base.php") ?>
<?= $this->section("content") ?>
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="w-50 card">
        <div class="card-body">
            <h3 class="fw-bold text-center text-dark mb-4">INSCRIVEZ-VOUS</h3>

            <!-- Affichage des messages d'erreur globaux -->
           
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

            <form action="/save_user" method="POST" class="row">
                <?= csrf_field() ?>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Nom :</label>
                    <input type="text" class="form-control <?= isset(session('errors')['nom']) ? 'is-invalid' : '' ?>" name="nom" placeholder="Nom" value="<?= old('nom') ?>" required>
                    <?php if (isset(session('errors')['nom'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['nom'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Prénom :</label>
                    <input type="text" class="form-control <?= isset(session('errors')['prenom']) ? 'is-invalid' : '' ?>" name="prenom" placeholder="Prénom" value="<?= old('prenom') ?>" required>
                    <?php if (isset(session('errors')['prenom'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['prenom'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Adresse E-mail :</label>
                    <input type="email" class="form-control <?= isset(session('errors')['email']) ? 'is-invalid' : '' ?>" name="email" placeholder="Email" value="<?= old('email') ?>" required>
                    <?php if (isset(session('errors')['email'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['email'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Rôle :</label>
                    <select name="role" class="form-select <?= isset(session('errors')['role']) ? 'is-invalid' : '' ?>" id="">
                        <option value="etudiant" <?= old('role') == 'etudiant' ? 'selected' : '' ?>>Étudiant</option>
                        <option value="enseignant" <?= old('role') == 'enseignant' ? 'selected' : '' ?>>Enseignant</option>
                        <option value="visiteur" <?= old('role') == 'visiteur' ? 'selected' : '' ?>>Visiteur</option>
                    </select>
                    <?php if (isset(session('errors')['role'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['role'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control <?= isset(session('errors')['passe']) ? 'is-invalid' : '' ?>" name="passe" placeholder="Mot de passe" required>
                    <?php if (isset(session('errors')['passe'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['passe'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="" class="form-label">Confirmer le mot de passe :</label>
                    <input type="password" class="form-control <?= isset(session('errors')['confpasse']) ? 'is-invalid' : '' ?>" name="confpasse" placeholder="Confirmer le mot de passe" required>
                    <?php if (isset(session('errors')['confpasse'])) : ?>
                        <div class="invalid-feedback"><?= session('errors')['confpasse'] ?></div>
                    <?php endif ?>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <button class="btn btn-outline-dark">S'inscrire</button>
                </div>

                <div class="d-flex">
                    <a href="/" class="btn btn-outline-secondary btn-sm m-2">Page d'accueil</a>
                    <a href="/login" class="hyperlink m-2">J'ai déjà un compte</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
