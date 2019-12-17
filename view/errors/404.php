<?php ob_start(); ?>

<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          
          <h3 class="font-weight-bold mb-4">Erreur 404</h3>

        	<p>Oups, il semblerait que la page soit introuvable.</p>

            <a class="btn btn-orange btn-rounded mx-0 waves-effect waves-ligh" href="<?= $this->route->showPath('home') ?>">Home</a>

        </div>
      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>

<?php $_content_body = ob_get_clean(); ?>