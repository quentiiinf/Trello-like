<!-- ** Contenu à afficher dans le body du template ** -->
<?php ob_start(); ?>
  <div class="container my-5 py-5 z-depth-1">
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <form class="text-center" id="login-form">
          <p class="h4 mb-4">Se connecter</p>
          <input type="text" id="username" class="form-control mb-4" placeholder="Username">
          <input type="password" id="password" class="form-control mb-4" placeholder="Password">
          <button class="btn btn-danger btn-block my-4" type="submit" id="submit">Se connecter</button>
        </form>
      </div>
    </div>
  </section>
  </div>
<?php $_content_body = ob_get_clean(); ?>

<!-- ** Scripts JS à inclure uniquement pour la page login ** -->
<?php ob_start(); ?>
  <script type="text/javascript" src="<?= $this->app->url('js/project/login/login.js') ?>"></script>
<?php $_content_scripts = ob_get_clean(); ?>
