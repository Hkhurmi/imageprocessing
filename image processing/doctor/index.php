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

  

  <script src="assets/js/custom.js"></script>
 <?php 
include('inc/footer.php');
ob_flush(); ?>