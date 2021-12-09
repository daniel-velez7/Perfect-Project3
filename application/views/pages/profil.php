

<form action="" method='post'>
    <label for="firstname">Prenom</label>
    <input type="text" id="firstname" name="firstname" value="<?= $user['firstname'] ?>"><br>
    <label for="lastname">Nom</label>
    <input type="text" id="lastname" name="lastname"value="<?= $user['lastname'] ?>"> <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?= $user['email'] ?>"> <br>
    <label for="password">mot de passe</label>
    <input type="password" id="password" name="password"> <br>
    <label for="phone">telephone</label>
    <input type="text" id="phone" name="phone" value="<?= $user['phone'] ?>"> <br>
    <label for="address">Adresse</label>
    <input type="text" id="address" name="address" value="<?= $user['address'] ?>"> <br>
    <label for="address2">Adresse (facultaif)</label>
    <input type="text" id="address2" name="address2" value="<?= $user['address2'] ?>"> <br>
    <label for="city">Ville</label>
    <input type="text" id="city" name="city" value="<?= $user['city'] ?>"> <br>
    <label for="code_postal">Code Postal</label>
    <input type="text" id="code_postal" name="code_postal" value="<?= $user['code_postal'] ?>"><br>
    <button type="submit" name='update'>Modifier</button>
    <button type="submit" name='delete'>Supprimer</button>
</form>

