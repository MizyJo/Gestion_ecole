<?= $this->extend("base.php") ?>
<?= $this->section("content") ?>    
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg w-25">
        <div class="card-body p-5">
            <h3 class="fw-bold text-center text-dark mb-4">CONNECTEZ-VOUS</h3>
            <form action="/login_validation" method="post">
                <div class="form-group mb-4">
                    <label for="email" class="form-label text-dark">Adresse E-mail :</label>
                    <input type="email" class="form-control form-control-lg p-3" id="email" placeholder="Adresse E-mail" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label text-dark">Mot de passe :</label>
                    <input type="password" class="form-control form-control-lg p-3" id="password" placeholder="Mot de passe" required>
                </div>
                <div class="form-group mb-4 text-center">
                    <button type="submit" class="btn btn-dark btn-lg w-100 py-2">Se connecter</button>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <a href="/" class="btn btn-outline-secondary btn-sm w-48">Page d'accueil</a>
                    <a href="/register" class="hyperlink w-48">S'inscrire</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>
