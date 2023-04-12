<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
 ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
			<img src="assets/img/slide/slide-1.jpg" class="w-100"/>
         </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
		  <img src="assets/img/slide/slide-2.jpg"  class="w-100"/>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
		  <img src="assets/img/slide/slide-3.jpg" class="w-100"/>
			</div>

        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 
    <!-- ======= Menu Section ======= -->
  <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Check our Product <span>Showcase</span></h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box menu1">
              <h4 class="color-white"><a href="products.php?pfor=Acne">Acne</a></h4>
            </div>
          </div>
 <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="box menu3">
              <h4 class="color-white"><a href="products.php?pfor=Rosacea">Rosacea</a></h4>
            </div>
          </div>

          <div class="col-lg-6 mt-4 " style="margin-top:5px;">
            <div class="box menu2">
              <h4 class="color-white"><a href="products.php?pfor=Actinic Keratosis">Actinic Keratosis</a></h4>
            </div>
          </div>

         
 <div class="col-lg-6 mt-4" style="margin-top:5px;">
            <div class="box menu2">
              <h4 class="color-white"><a href="products.php?pfor=Eczemaa">Eczemaa</a></h4>
            </div>
          </div>
        </div>

      </div>
    </section>
   
  <script src="assets/js/custom.js"></script>
 <?php 
include('inc/footer.php');
ob_flush(); ?>