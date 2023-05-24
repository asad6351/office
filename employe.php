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
	 
		<div class="card shadow-sm grow ctm-border-radius">
			<div class="card-body align-center">
				<h4 class="card-title float-left mb-0 mt-2">7 People</h4>
				<ul class="nav nav-tabs float-right border-0 tab-list-emp">
					 
					<li class="nav-item pl-3">
						<a class="btn btn-theme button-1 text-white ctm-border-radius p-2 add-person ctm-btn-padding" href="employes-add.php"><i class="fa fa-plus"></i> Add Person</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="ctm-border-radius shadow-sm grow card">
			<div class="card-body">
				<div class="row people-grid-row">
<?php 
									$query = "select * from employes ";

									$result=mysqli_query($db,$query);
									while($row=mysqli_fetch_assoc($result)){ 

										 
										?>



					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="card widget-profile">
							<div class="card-body">
								<div class="pro-widget-content text-center">
									<div class="profile-info-widget">
										<a class="booking-doc-img" href="employe-details.php?id=<?php echo $row['id']; ?>"><img alt="User Image" src="assets/img/profiles/img-13.jpg"></a>
										<div class="profile-det-info">
											<h4><a class="text-primary" href="employe-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['first_name']; ?> </a></h4>
											<div>
												<p class="mb-0"><b><?php echo $row['email']; ?> </b></p>
												 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>


					


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
