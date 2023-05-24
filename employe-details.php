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
	$idemploye = $_GET['id'];
	$first_name= $_POST['first_name']; 
	$last_name= $_POST['last_name']; 
	$city= $_POST['city']; 
	$address= $_POST['address'];  
	$gander= $_POST['gander'];  
	$date_of_birth= $_POST['date_of_birth']; 
	$blood_group= $_POST['blood_group'];  
	date_default_timezone_set("Asia/Karachi");
	$datetime = date("Y-m-d h:i:s");

		$query= "update employes SET `first_name`='$first_name',`last_name`='$last_name',`city`='$city',`address`='$address',`gander`='$gander',`blood_group`='$blood_group',`date_of_birth`='$date_of_birth' where id=$idemploye";

	//$query= "insert into employes (first_name,email,password) values ('$first_name','$email','$password')";
//echo $query;die();
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
		<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm grow bg-white p-4 mb-4 card">
			<ul class="list-group list-group-horizontal-lg">
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="employment.html">Employement</a>
				</li>
				<li class="list-group-item text-center active button-5">
					<a class="text-white" href="details.html">Detail</a>
				</li>
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="documents.html">Document</a>
				</li>
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="payroll.html">Payroll</a>
				</li>
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="time-off.html">Timeoff</a>
				</li>
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="profile-reviews.html">Reviews</a>
				</li>
				<li class="list-group-item text-center button-6">
					<a class="text-dark" href="profile-settings.html">Settings</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6 d-flex">
				<div class="card flex-fill ctm-border-radius shadow-sm grow">
					<div class="card-header">
						<h4 class="card-title mb-0">Basic Information</h4>
					</div>
					<?php 
							$idget = $_GET['id'];
									$query = "select * from employes where id='$idget'";

									$result=mysqli_query($db,$query);
									while($row=mysqli_fetch_assoc($result)){ 

										 
										?>

					<div class="card-body text-center">
 						<p class="card-text mb-3"><span class="text-primary">First Name :</span> <?php echo $row['first_name'];?></p>
						<p class="card-text mb-3"><span class="text-primary">Last Name :</span> <?php echo $row['last_name'];?></p>
						<p class="card-text mb-3"><span class="text-primary">City :</span> <?php echo $row['city'];?></p>
						<p class="card-text mb-3"><span class="text-primary">Address :</span> <?php echo $row['address'];?></p>
						<p class="card-text mb-3"><span class="text-primary">Date of Birth :</span> <?php echo $row['date_of_birth'];?></p>
						<p class="card-text mb-3"><span class="text-primary">Gender :</span> <?php echo $row['gander'];?></p>
						<p class="card-text mb-3"><span class="text-primary">Blood Group :</span> <?php echo $row['blood_group'];?> </p>

						<a class="btn btn-theme ctm-border-radius text-white btn-sm" data-target="#add_basicInformation" data-toggle="modal" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-plus"></i></a> <a class="btn btn-theme ctm-border-radius text-white btn-sm" data-target="#edit_basicInformation" data-toggle="modal" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-pencil"></i></a>
					</div>

	<div class="modal fade" id="edit_basicInformation" style="zoom:0.8">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
			<form action="" method="POST">		 
				<div class="form-group">
				  <label for="pwd">First Name :</label>
				  <input type="text" class="form-control" name="first_name" placeholder="<?php echo $row['first_name'];?>" value="<?php echo $row['first_name'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Last Name :</label>
				  <input type="text" class="form-control" name="last_name"  placeholder="<?php echo $row['last_name'];?>" value="<?php echo $row['last_name'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">City :</label>
				  <input type="text" class="form-control" name="city"  placeholder="<?php echo $row['city'];?>" value="<?php echo $row['city'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Address :</label>
				  <input type="text" class="form-control" name="address"  placeholder="<?php echo $row['address'];?>" value="<?php echo $row['address'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Date of Birth :</label>
				  <input type="text" class="form-control" name="date_of_birth" placeholder="<?php echo $row['date_of_birth'];?>" value="<?php echo $row['date_of_birth'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Gander :</label>
				  <input type="text" class="form-control" name="gander"  placeholder="<?php echo $row['gander'];?>" value="<?php echo $row['gander'];?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Blood Group :</label>
				  <input type="text" class="form-control" name="blood_group"  placeholder="<?php echo $row['blood_group'];?>" value="<?php echo $row['blood_group'];?>">
				</div>
				<div class="form-group">
 				  <input type="submit" name="submit" value="Save" class="form-control btn btn-theme text-white ctm-border-radius float-right button-1"  >
				</div>
			</form>
 
					 
				</div>
			</div>
		</div>
	</div>



				<?php } ?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 d-flex">
				<div class="card flex-fill ctm-border-radius shadow-sm grow">
					<div class="card-header">
						<h4 class="card-title mb-0">Contact</h4>
					</div>
					<div class="card-body text-center">
						<p class="card-text mb-3"><span class="text-primary">Phone Number :</span> 987654321</p>
						<p class="card-text mb-3"><span class="text-primary">Personal Email :</span> <a class="__cf_email__" data-cfemail="fa979b88939b99958e8e9594ba9f829b978a969fd4999597" href="https://dleohr.dreamguystech.com/cdn-cgi/l/email-protection">[email&nbsp;protected]</a></p>
						<p class="card-text mb-3"><span class="text-primary">Secondary Number :</span> 986754231</p>
						<p class="card-text mb-3"><span class="text-primary">Web Site :</span> www.focustechnology.com</p>
						<p class="card-text mb-3"><span class="text-primary">Linkedin :</span> #mariacotton</p><a class="btn btn-theme ctm-border-radius text-white btn-sm" data-target="#add_Contact" data-toggle="modal" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-plus"></i></a> <a class="btn btn-theme ctm-border-radius text-white btn-sm" data-target="#edit_Contact" data-toggle="modal" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-pencil"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12 col-md-12">
				<div class="row">
					<div class="col-xl-12 col-lg-6 col-md-6 d-flex">
						<div class="card ctm-border-radius shadow-sm grow flex-fill">
							<div class="card-header">
								<h4 class="card-title mb-0">Dates</h4>
							</div>
							<div class="card-body text-center">
								<p class="card-text mb-3"><span class="text-primary">Start Date :</span> 06 Jun 2017</p>
								<p class="card-text mb-3"><span class="text-primary">Visa Expiry Date :</span> 06 Jun 2020</p><a class="btn btn-theme ctm-border-radius text-white btn-sm" data-target="#edit_Dates" data-toggle="modal" href="javascript:void(0)"><i aria-hidden="true" class="fa fa-pencil"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-6 col-md-6 d-flex">
						<div class="card ctm-border-radius shadow-sm grow flex-fill">
							<div class="card-header">
								<h4 class="card-title d-inline-block mb-0">Dates</h4><span class="float-right"><a class="text-primary" data-target="#addNewType" data-toggle="modal" href="javascript:void(0)">New Type</a></span>
							</div>
							<div class="card-body">
								<div class="input-group mb-3">
									<input class="form-control datetimepicker date-enter" placeholder="Add Start Date" type="text">
									<div class="input-group-append">
										<button class="btn btn-theme text-white" type="button"><i aria-hidden="true" class="fa fa-calendar"></i></button>
									</div>
								</div>
								<div class="input-group mb-3">
									<input class="form-control datetimepicker date-enter" placeholder="Add Visa Expiry Date" type="text">
									<div class="input-group-append">
										<button class="btn btn-theme text-white" type="button"><i aria-hidden="true" class="fa fa-calendar"></i></button>
									</div>
								</div>
								<div class="text-center">
									<a class="btn btn-theme ctm-border-radius text-white button-1" href="javascript:void(0)">Add A Key Date</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>











	
 <?php @include('footer.php');?>
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
