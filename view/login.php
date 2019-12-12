<?php ob_start(); ?>

<div class="container my-5 py-5 z-depth-1">


<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-6">

      <!-- Default form login -->
      <form class="text-center" id="login-form">

        <p class="h4 mb-4">Se connecter</p>

        <!-- Email -->
        <input type="text" id="username" class="form-control mb-4" placeholder="Username">

        <!-- Password -->
        <input type="password" id="password" class="form-control mb-4" placeholder="Password">

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" id="submit">Se connecter</button>


      </form>
      <!-- Default form login -->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->


</div>

<?php $_content_body = ob_get_clean(); ?>

<?php ob_start(); ?>

<script type="text/javascript" src="<?= $this->app->url('js/login.js') ?>"></script>

<?php $_content_scripts = ob_get_clean(); ?>
