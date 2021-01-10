<?php

include 'assets/incl/header.php';

?>

<div class="navimg">
  <img src="assets/images/headerimg.PNG" class="w-100" alt="Headerimg">
</div>

<div class="container-fluid">
  <div class="row signuprow col-sm-12 mr-auto mx-auto">

  <div class="mr-auto mx-auto">
<?php

  echo '<form action="signup.inc.php" method="POST" class="signup">
        <div class="form-group">
        <input type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
        <input type="password" name="u_pwd" placeholder="Password">
        </div>
        <button type="submit" name="submit">Signup</button>
        </form>
        <a href="login.php">Login</a>';

 ?>
</div>
</div>
</div>

<?php
  include 'assets/incl/footer.php';
 ?>
