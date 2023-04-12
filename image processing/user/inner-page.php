<?php ob_start();
include('inc/header.php') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Products</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Products</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>Checkout form</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill"><?php echo $_POST['itemscount'];?></span>
      </h4>
      <ul class="list-group mb-3" id="cartul">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (CAD)</span>
          <strong>$20</strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Delivery Address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
        
        </div>

		<div class="mb-3">
          <label for="email">Contact No <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="contactno" placeholder="5665645">
        
        </div>
        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
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
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

</div>
	  
	  
        <div id="itemscollections" style="display:none;">
          <?php echo $_POST['CollectionList']; ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<script>
var ci=1;
$(document).ready(function(){
	var content=''; 
	var pricetotal=0;
	$("#itemscollections span").each(function(){
		var div = parseInt(ci)%parseInt(2);
		if(div == 0)
		{ 
			content+='<span class="text-success">-'+$(this).text()+'</span></li>';
			pricetotal = parseInt(pricetotal)+ parseInt($(this).text());
		}
		else{
			content+='<li class="list-group-item d-flex justify-content-between bg-light">';
			content+='<div class="text-success">';
			content+=' <small>'+ $(this).text() +'</small>';
			content+=' </div>';
		}
		ci++;
	});
	content+='<li class="list-group-item d-flex justify-content-between">';
          content+='<span>Total (AUD)</span>';
          content+='<strong>$'+ pricetotal+'</strong>';
        content+='</li>';
		console.log(content);
	$("#cartul").html(content);
})
</script>
 <?php 
include('inc/footer.php');
ob_flush(); ?>