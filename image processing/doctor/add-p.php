<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Add Prescription</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Prescription</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>Add Prescription Details </h2>
	
	 <?php
                        if(isset($_POST['submit2']))
                        {
							
                            $id=$_POST['id'];
                        
						   $prescription=$_POST['prescription'];
						   if(!empty($id))
                            {
                               $query=mysqli_query($connect,"update ip_diagnose set prescription='$prescription' where id='$id'");
                                    if(mysqli_affected_rows($connect))
                                    {
                                        echo '<div class="alert alert-success">prescription detail is updated Successfully.</div>';
                                    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger">Error Occured.</div>';
                                    }
                                }
                                else
                                {
                                    echo '<div class="alert alert-warning">Enter ID First</div>';
                                }
                            }
                            
                        
                      ?>
		  
  </div>
<?php 
 if(isset($_GET['id']))
                          {
							  
                          ?>
  <div class="row">
      <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Add Prescription Details</h4>
	  
	  
      <form class="needs-validation" novalidate method="post" action="add-p.php">
        <div class="row">
		<div class="col-md-12 mb-3">
            <label for="uid">User ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $_GET['id'];?>" placeholder="" readonly required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">Prescription</label>
            <input type="text" class="form-control" name="prescription" id="firstName" placeholder="" required>
          </div>
         </div>
   
      

       <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" name="submit2" type="submit">Save details</button>
      </form>
    </div>
  </div>
						  <?php 
						  }?>
</div>
	  
	  
       
      </div>
    </section>

  </main><!-- End #main -->
 <?php 
include('inc/footer.php');
ob_flush(); ?>