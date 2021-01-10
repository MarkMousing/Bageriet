<?php
  include 'assets/incl/header.php';
 ?>

 <div class="bd-example">
   <div id="carouselExampleCaptions" class="mycarousel carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
       <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
     </ol>
    <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="assets/incl/images/slide1.jpg" class="d-block w-100" alt="Slide1">
       <div class="carousel-caption d-none d-md-block">
         <h2>Vi elsker at lave brød</h2>
      </div>
    </div>

     <div class="carousel-item">
       <img src="assets/incl/images/slide2.jpg" class="d-block w-100" alt="Slide2">
       <div class="carousel-caption d-none d-md-block">
         <h2>Vi elsker at lave brød</h2>
       </div>
     </div>

     <div class="carousel-item">
       <img src="assets/incl/images/slide3.jpg" class="d-block w-100" alt="Slide3">
       <div class="carousel-caption d-none d-md-block">
         <h2>Vi elsker at lave brød</h2>
       </div>
     </div>
   </div>

   <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>

   <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
 </div>
 </div>

 <div class="container-fluid">
   <div class="row">
     <div class="article1 col-sm-12">
       <h3>Vi skaber lækkert brød</h3>
     </div>
     <div class="col-sm-6 mr-auto mx-auto">
       <p>Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har tilføjet humor eller tilfældige ord, som på ingen måder ser ægte ud.</p>
     </div>
   </div>

   <div class="frontrow row">
     <div class="card" style="width: 21rem;">
       <img src="assets/incl/images/article" class="card-img-top rounded-circle mx-auto" alt="Article">
       <div class="card-body">
         <p class="card-text">Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har</p>
       </div>
     </div>

     <div class="card" style="width: 21rem;">
       <img src="assets/incl/images/article2" class="card-img-top rounded-circle mx-auto" alt="Article2">
       <div class="card-body">
         <p class="card-text">Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har</p>
       </div>
     </div>

     <div class="card" style="width: 21rem;">
       <img src="assets/incl/images/article3" class="card-img-top rounded-circle mx-auto" alt="Article3">
       <div class="card-body">
         <p class="card-text">Der er mange tilgængelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgået forandringer, når nogen har</p>
       </div>
     </div>
   </div>

   <div class="frontrow2 row">
     <img src="assets/incl/images/newsletterbg.jpg" class="imgnews w-100" alt="Newsletter">
   </div>

   <div class="frontproductrow row">

     <section id="products">
       <div class="card" style="width: 10rem; border: 1px solid black">
         <img src="" id="productimg">
         <h6 id="producttitle"></h6>
       </div>
     </section>
 </div>
 </div>

<?php
  include 'assets/incl/footer.php';
 ?>
