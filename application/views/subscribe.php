<form method="POST">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="d-flex mb-4 justify-content-center">
                    <h3>Inscription</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-3">
                    <label for="firstname">Prénom*</label>
                    <input type="text" name="firstname" id="firstname" class='form-control' placeholder="Entrer le prénom" value="<?= set_value('firstname') ?>">
                    <?php echo form_error('firstname', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="lastname">Nom*</label>
                    <input type="text" name="lastname" id="lastname" class='form-control' placeholder="Entrer le nom" value="<?= set_value('lastname') ?>">
                    <?php echo form_error('lastname', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="email">E-mail*</label>
                    <input type="email" name="email" id="email" class='form-control' placeholder="Entrer l'email" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="password">Mot de passe*</label>
                    <input type="password" name="password" id="password" class='form-control' placeholder="Entrer le mot de passe" value="<?= set_value('password') ?>">
                    <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="password_conf">Confirmation mot de passe*</label>
                    <input type="password" name="password_conf" id="password_conf" class='form-control' placeholder="Confirmer le mot de passe" value="<?= set_value('password_conf') ?>">
                    <?php echo form_error('password_conf', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="address">Adresse*</label>
                    <input type="text" name="address" id="address" class='form-control' placeholder="Entrer l'adresse 1" value="<?= set_value('address') ?>">
                    <?php echo form_error('address', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="address2">Adresse 2</label>
                    <input type="text" name="address2" id="address2" class='form-control' placeholder="Entrer l'adresse 2" value="<?= set_value('address2') ?>">
                    <?php echo form_error('address2', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="code_postal">Code Postal*</label>
                    <input type="text" name="code_postal" id="code_postal" class='form-control' placeholder="Entrer le code postal" value="<?= set_value('code_postal') ?>">
                    <?php echo form_error('code_postal', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="city">Ville*</label>
                    <input type="text" name="city" id="city" class='form-control' placeholder="Entrer le nom de la ville" value="<?= set_value('city') ?>">
                    <?php echo form_error('city', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="mb-4">
                    <label for="phone">Téléphone*</label>
                    <input type="tel" name="phone" id="phone" class='form-control' placeholder="Entrer votre numéro de tél." value="<?= set_value('phone') ?>">
                    <?php echo form_error('phone', "<div style='color:red'>", "</div>"); ?>
                </div>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-6">
                <div class="d-flex mb-3 justify-content-center">
                    <button type='submit' class="btn btn-danger">Valider l'inscription</button>
                </div>
            </div>
        </div>
    </div>
</form>