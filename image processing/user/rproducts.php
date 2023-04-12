<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs body-content pt-5 w-100">
	<div class="cartcontainer">
		<input type="checkbox" id="cartToggle" name="toggle">
		  <label for="cartToggle" class="toggleCart btntoggle btnStyle btnStyle2" onclick="togglefn(this);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
				<i class="icofont-cart" aria-hidden="true"></i>
				<span class="num">0</span>
			</label>
	</div>
      <div class="container recipe-menu">

        <div class="section-title">
          <h2>Best<span> Recommended Products</span></h2>
         </div>
		
        <div class="row ">
<?php 
							//echo "SELECT * FROM ip_product";
                          $query = "SELECT * FROM ip_product";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                             ?>
           <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="../partner/<?php echo $row['pimage'];?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="name"><?php echo $row['pname'];?></h4>
				 <h6 class="desc"><?php echo $row['pdescription'];?></h6>
                <div class="social">
                  <a class="price"><i class="icofont-dollar"></i><?php echo $row['pprice'];?></a>
				  <a href="javascript:void(0)" class="listOver"><i class="icofont-cart"></i>Add to cart</a>
                </div>
              </div>
            </div>
          </div>
		  
		  <?php
					}?>
			
      </div>
    	
	</section>
	<nav class="cart">
		<h3>List of orders: <span>36$</span></h3>
		<ol id="listOfOrders">
			</ol>
		<a class="btnStyle btnStyle3 finishOrder">Finish Order</a>
	</nav>
	
	

 </main><!-- End #main -->

  <script src="assets/js/custom.js"></script>
 <?php 
include('inc/footer.php');
ob_flush(); ?>