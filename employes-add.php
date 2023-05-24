<?php @include('header.php');?>
 <Style>

.wrapcoloumn
{
	   white-space: -o-pre-wrap; 
    word-wrap: break-word;
    white-space: pre-wrap; 
    white-space: -moz-pre-wrap; 
    white-space: -pre-wrap; 
}

</Style>
  <?php 
if(isset($_POST['submit'])){ 
	$first_name= $_POST['first_name']; 
	$email= $_POST['email'];
	$password=$_POST['password'];
	date_default_timezone_set("Asia/Karachi");
	$datetime = date("Y-m-d h:i:s");
	$query= "insert into employes (first_name,email,password) values ('$first_name','$email','$password')";
//ho $query;die();
	//$query = "insert into projects (name,details,datetime,platform,status) values ('$name','$details','$datetime','$platform','$status')";
	$result = mysqli_query($db,$query);
	echo "<script> window.location = 'employe.php';</script>";
}

 ?>
<body>
	<?php //@include('loader.php');?>
	<?php @include('topbar.php');?>
	
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row">				
				<?php @include('sidebar.php');?>
 

 <div class="col-xl-9 col-lg-8 col-md-12">
		<div class="accordion add-employee" id="accordion-details">
			<div class="card shadow-sm grow ctm-border-radius">
				<div class="card-header" id="basic1">
					<h4 class="cursor-pointer mb-0"><a aria-expanded="true" class="coll-arrow d-block text-dark" data-target="#basic-one" data-toggle="collapse" href="javascript:void(0)">Basic Details<br>
					<span class="ctm-text-sm">Organized and secure.</span></a></h4>
				</div>
				<div class="card-body p-0">
					<div aria-labelledby="basic1" class="collapse show ctm-padding" data-parent="#accordion-details" id="basic-one">
						<form action="" method="POST">
							<div class="row">
								<div class="col form-group">
									<input class="form-control" placeholder="First Name" type="text" name="first_name">
								</div> 

								<div class="col-12 form-group">
									<input class="form-control" placeholder="Email" type="email" name="email">
								</div>

								<div class="col form-group">
									<input class="form-control" placeholder="Password" type="password" name="password">
								</div> 
								 
							</div>
					
					</div>
				</div>
			</div>
		 
		</div>
		<div class="row">
			<div class="col-12">
				<div class="submit-section text-center btn-add">
					<input type="submit" name="submit" class="btn btn-theme text-white ctm-border-radius button-1" value="Add Team Member">
				</div>

			</form>
			</div>
		</div>
	</div>










			</div>
		</div>
	</div><?php @include('footer.php');?>
</body>
</html>
<!--  <script>
   $('#status').change(function(){
   	alert('aaaaaaaaa');
        var id = $(this).val();
    $.ajax({
        type: "GET",
        url: "page2.php",
        data: "pass_id="+id,
        success: function( data ) {
              alert(data);

            document.getElementById("show").innerHTML = data;
        }
    });
    });
    </script> -->
