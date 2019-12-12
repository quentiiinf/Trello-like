<?php ob_start(); ?>

<div class="container my-5">

  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h3 class="text-center font-weight-bold mb-4 pb-2">Trello V2</h3>
    <hr class="w-header">
    <!-- Section description -->
    <p class="lead text-center w-responsive mx-auto text-muted mt-4 pt-2 mb-5">Mais en mieux</p>  
      
    <form class="add-parent">
      <input type="text" class="form-control" placeholder="Ajouter une todolist"/>
    </form>

    <br/>

    <!--First row-->
    <div class="row" id="row">

    </div>
    <!--First row-->

	</section>
  
  
</div>  

<?php $_content_body = ob_get_clean(); ?>

<?php ob_start(); ?>

<script type="text/javascript" src="<?= $this->app->url('js/home.js') ?>"></script>

<?php $_content_scripts = ob_get_clean(); ?>

