<?php ob_start();
include('inc/header.php');
include('inc/connection.php');
?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Diagnose</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Diagnose</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
		<div class="container">
  <div class="py-5 text-center">
    
    <h2>User Details </h2>
	
	 <?php
if(isset($_POST['submit2']))
  {                   
$uid=$_POST['uid'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$contactno=$_POST['contactno'];


//$command = "python -c 'import ml; model = ml.train_linear_regression([[1,2,3], [4,5,6]], [7,8,9]); print(model.coef_)'";
//$output = exec($command);

//echo $output; 
//echo '<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Submit</a>';
$s=rand(0,1);
$diagnose="Non-Chronic";
if(isset($_FILES['ff']))
	{
		$name=strtolower($_FILES['ff']['name']);
		$tmp_name=$_FILES['ff']['tmp_name'];
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		$compare=array('gif','jpeg','jpg','png');
		if(isset($name))
		{
			if(!empty($name))
			{
				if(in_array($ext,$compare))
				{
					$location='diagnose/';
					if(file_exists($location.$name))
					{
						$l=3;
						$c='abcdefghijklmnopqrstuvwxyz';
						$name='';
						for($i=0;$i<=$l;$i++)
						{
							$name.=$c[rand(0,strlen($c))];
							}
							$name=$name.'.'.$ext;
					}
					if(move_uploaded_file($tmp_name,$location.$name))
					{
						$loc_file=$location.$name;
						//echo $loc_file;
						//echo "INSERT INTO ip_diagnose (`uid`,`fname`, `lname`, `username`, `mobile`, `img_path`,`statusd`) VALUES ('$uid', '$fname', '$lname', '$uname','$contactno', '$loc_file','in progress')";			
if($s==0)
{
	$diagnose="Chronic";
}

else
{
	$diagnose="Non-Chronic";
}
						$query="INSERT INTO ip_diagnose (`uid`,`fname`, `lname`, `username`, `mobile`, `img_path`,`recommendation`,`statusd`) VALUES ('$uid', '$fname', '$lname', '$uname','$contactno','$loc_file','$s','$diagnose')";
						 if(mysqli_query($connect,$query))
        {
			                  
            echo '<div class="alert alert-success">Detail has been Added successfully. Kindly wait..</div>';
			
        }
        else
        {
            echo '<div class="alert alert-danger">Problem Occured.</div>';
        }
					}
				}
				else
				{
					echo '<div class="alert alert-danger">Enter a valid image';
				}
			}
			else
				{
					echo '<div class="alert alert-danger">Select Image';
				}
		}
	}
		   }
                      ?>
  </div>
<?php 
 if(isset($_SESSION['client_id']))
                          
						  {
							  
                          $query = "SELECT * FROM ip_user where id='".$_SESSION['client_id']."'";
                          $result = mysqli_query($connect, $query) or die(mysqli_error($db));
                          while ($row = mysqli_fetch_array($result)) 
						  {
                             ?>
  <div class="row">
      <div class="col-md-8 order-md-1">
      <h4 class="mb-3">User Details</h4>
      <form class="needs-validation" method="post" action="diagnose.php" enctype="multipart/form-data">
        <div class="row">
		<div class="col-md-12 mb-3">
            <label for="firstName">User ID</label>
            <input type="text" class="form-control" value="<?php echo $row['id'];?>" id="uid" placeholder="" name="uid" readonly required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" value="<?php echo $row['fname'];?>" id="firstName" placeholder="" name="fname" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" value="<?php echo $row['lname'];?>" placeholder="" name="lname" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">username <span class="text-muted"></span></label>
          <input type="text" class="form-control" id="uname" value="<?php echo $row['username'];?>" name="uname"/>
        
        </div>

		<div class="mb-3">
          <label for="email">Contact No <span class="text-muted"></span></label>
          <input type="text" class="form-control" value="<?php echo $row['mobile'];?>"id="contactno" name="contactno" placeholder="5665645">
        
        </div>
<div class="mb-3">
          <label for="address">Upload File</label>
          <input type="file" class="form-control" id="ff"  name="ff" required>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for diagnose propose only</label>
       
       <hr class="mb-4">
        <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" name="submit2" type="submit">Save details</button>
      </form>
    </div>
  </div>
						  <?php 
						  }
						  }?>
</div>
	  
	  
       
      </div>
    </section>


<script src="assets/js/jquery.js"></script>
        
<script>
$(document).ready(function(){
$('#myModal').modal({
  backdrop: 'static',
  keyboard: false,
  show: false
});

$('#myModal').on('shown.bs.modal', function () {
 
    var progress = setInterval(function() {
    var $bar = $('.bar');

    if ($bar.width()==500) {
      
        // complete!
        
        // reset progree bar
        clearInterval(progress);
        $('.progress').removeClass('active');
        $bar.width(0);
        
        // update modal 
        $('#myModal .modal-body').html('Task complete. You can now close the modal.');
        $('#myModal .hide,#myModal .in').toggleClass('hide in');
        
        // re-enable modal allowing close
        $('#myModal').data('reenable',true);
        $('#myModal').modal('hide');
    } else {
      
        // perform processing logic (ajax) here
        $bar.width($bar.width()+100);
    }
    
    $bar.text($bar.width()/5 + "%");
	}, 600);
  
});

$('#myModal').on('hidden.bs.modal', function () {
    // reset modal
   if ($('#myModal').data('reenable')) {
       $(this).removeData();
       $('#myModal').modal({
          show: true
       });
   }
});
});
</script>
  </main><!-- End #main -->
 <?php 
include('inc/footer.php');
ob_flush(); ?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title in" id="myModalLabel">Please Wait..</h4>
         </div>
      <div class="modal-body center-block">
        <div class="progress">
          <div class="progress-bar bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default hide" data-dismiss="modal" id="btnClose">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->