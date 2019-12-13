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

    <ol class="row d-flex justify-content-center sortable" id="row">
        <!--Big blue-->
        <div class="preloader-wrapper active m-t-5">
          <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
      </div>
    </ol>



	</section>
  
  
</div>  

<?php $_content_body = ob_get_clean(); ?>

<?php ob_start(); ?>
<script type="text/javascript" src="<?= $this->app->url('js/home.js') ?>"></script>
<script type="text/javascript" src="<?= $this->app->url('js/jquery-sortable.js') ?>"></script>
<?php $_content_scripts = ob_get_clean(); ?>

<?php if(isset($errors['must_disconnect'])): ob_start(); ?>
    <h1>Vous êtes déjà connecté.</h1>
<?php $_content_errors = ob_get_clean();  endif; ?>

