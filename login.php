<?php
  include 'assets/incl/header.php';
  ?>

  <div class="navimg">
    <img src="assets/images/headerimg.PNG" class="w-100" alt="Headerimg">
  </div>

<div class="container-fluid">
  <div class="row loginrow col-sm-12 mr-auto mx-auto">

  <div class="mr-auto mx-auto">
    <?php

    if (isset($_SESSION['u_id'])) {
             echo '<form action="" method="POST" class="login">
             <button type="submit" name="submit">Logout</button>
             </form>';
          } else {
              echo '<form action="login.inc.php" method="POST" class="login">
          <div class="form-group">
          <input type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group">
          <input type="password" name="u_pwd" placeholder="Password">
          </div>
          <button type="submit" name="submit">Login</button>
          </form>
          <a href="signup.php">Sign up</a>';
          }

     ?>
  </div>
</div>

</div>

<?php
  include 'assets/incl/footer.php';
 ?>
