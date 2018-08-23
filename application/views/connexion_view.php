<div class="top-content my-5 page_connexion">

    <div>

        <div class="row mb-2">
            <div class="col-md-8 offset-md-2">

                <p class="description">
                    <?php echo '<h2 class="text-center">' . WEBSITE_NAME. '</h2>' ?>
                </p>

                <section class="login-form" style="padding: 2rem; background-color: #fff !important; border: 1px solid #000;">

                    <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-4 mb-5 my-2 mt-5">
                        <p class="lead text-center">CONNECTEZ VOUS</p>
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="login-pseudo text-left">Nom d'utilisateur (Pseudo)</label>
                                <input type="text" name="pseudo" placeholder="Nom d'utilisateur..." class="form-control" id="login-pseudo">
                            </div>
                            <div class="form-group">
                                <label for="login-password">Mot de passe</label>
                                <input type="password" name="password" placeholder="Mot de passe..." class="form-control" id="login-password">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Thag me !</button>
                        </form>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                <a style="color: #000; font-weight: 500;" href="<?= base_url(); ?>inscription">Vous n'avez Toujours pas de compte ? </p>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</div>
