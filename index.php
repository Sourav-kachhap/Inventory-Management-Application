<?php
session_start();
include "inc/header.php";

?>

<section class="login-block ">
  <div class="container-1">
    <div class="row">
      <div class="col login-sec">
        <h2 class="text-center">Login Now</h2>
        <span id = "login_error"></span>
        <form class="login-form" onsubmit="login(); return false;">
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase"
              >Username</label
            >
            <input
              type="text"
              class="form-control"
              id="username"
              autocomplete="username"
            />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="password"
              autocomplete="current-password"
            />
          </div>

          <div class="form-check">
            <button type="submit" class="btn btn-login float-right">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include "inc/footer.php";

?>
