<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Settings</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Settings</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>User Details </h2>
  </div>
<?php 
 if(isset($_SESSION['client_id']))
                          {
							  
                          $query = "SELECT * FROM ip_user where id='".$_SESSION['client_id']."'";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) {
                             ?>
  <div class="row">
      <div class="col-md-8 order-md-1">
      <h4 class="mb-3">User Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
		<div class="col-md-12 mb-3">
            <label for="firstName">User ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id'];?>" id="firstName" placeholder="" value="" readonly required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" value="<?php echo $row['fname'];?>" id="firstName" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" value="<?php echo $row['lname'];?>" placeholder="" value="" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" value="<?php echo $row['email'];?>"placeholder="you@example.com">
        
        </div>

		<div class="mb-3">
          <label for="email">Contact No <span class="text-muted"></span></label>
          <input type="text" class="form-control" value="<?php echo $row['mobile'];?>"id="contactno" placeholder="5665645">
        
        </div>
        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" value="<?php echo $row['address'];?>" placeholder="1234 Main St" required>
        </div>

      

        <hr class="mb-4">
        
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Cash on Delivery</label>
          </div>          
        </div>
       <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Save details</button>
      </form>
    </div>
  </div>
						  <?php }
						  }?>
</div>
	  
	  
       
      </div>
    </section>

  </main><!-- End #main -->
 <?php 
include('inc/footer.php');
ob_flush(); ?>