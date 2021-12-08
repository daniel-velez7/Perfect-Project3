<form method="POST">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="d-flex mb-3 justify-content-center">
                    <h3>Connexion</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-3">
                    <label for="email">Email*</label>
                    <input type="text" name="email" id="email" class='form-control' placeholder="Entrer l'email">
                    <?php echo form_error('email', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-3">
                    <label for="password">Mot de passe*</label>
                    <input type="password" name="password" id="password" class='form-control' placeholder="Entrer le mot de passe">
                    <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="d-flex mb-3 justify-content-center">
                    <button type='submit' name="valider" class="btn btn-danger">Se connecter</button>
                </div>
            </div>
        </div>
    </div>
</form>