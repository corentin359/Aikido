<?php if($error): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<div class="col-lg-offset-3 col-md-offset-4 col-sm-offset-5  col-lg-3 col-md-4 col-sm-5 ">
    <form method="post">
        <p><label>Votre pseudo</label> : <input type="text" name="login"/></p>
        <p><label>Mot de passe</label> : <input type="password" name="motDePasse"/></p>
        <button class="btn btn-primary">Envoyer</button>
    </form>
</div>