<!-- ** Contenu à afficher dans le body du template ** -->
<?php ob_start(); ?>
  <div class="container my-5 py-5 z-depth-1">
  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
          <div class="alert alert-success">Vous êtes déconnecté.</div>
      </div>
    </div>
  </section>
  </div>
<?php $_content_body = ob_get_clean(); ?>
