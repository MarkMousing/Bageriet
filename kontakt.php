<?php
  include 'assets/incl/header.php';
  include 'assets/incl/contact.php';
 ?>

 <div class="navimg">
   <img src="assets/incl/images/headerimg.PNG" class="w-100" alt="Headerimg">
 </div>

 <div class="contactinfo">
   <h3 class="col-sm-6 mr-auto mx-auto">Kontakt os</h3>
   <p class="col-sm-6 mr-auto mx-auto">Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har tilføjet humor eller tilfældige ord, som på ingen måde ser ægte ud.</p>
 </div>

 <div class="container-fluid">

   <div class="contact row">
     <div class="contactcards1 card" style="width: 30rem; height: 27rem;">
       <div class="card-body">
         <form action="" method="post">
           <div class="form-group">
             <label for="name">Dit navn</label>
             <input type="text" name="name" id="name" class="gt-input" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
           </div>

           <div class="form-group">
             <label for="email">Din e-mail</label>
             <input type="text" name="email" id="email" class="gt-input" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
           </div>

           <div class="form-group">
             <label for="message">Din besked</label>
             <textarea name="message" id="message" class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
           </div>

            <input type="submit" class="mybtn btn btn-default" value="Send">

            <div class="form-status">
              <?php
                echo "$status";
              ?>
            </div>
          </form>

        </div>
      </div>

      <div class="contactcards2 card" style="width: 30rem; height: 27rem;">
        <div class="card-body">
          <p class="card-text">Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har</p>
        </div>
        <img src="assets/incl/images/article2" class="imgmap card-img-top h-80">
      </div>
    </div>
  </div>
<?php
  include 'assets/incl/footer.php';
 ?>
