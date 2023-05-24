<?php @include('header.php');?>
 <?php 
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$details = $_POST['details'];
	$platform = $_POST['platform'];
	$status = 1;

	date_default_timezone_set("Asia/Karachi");
	$datetime = date("Y-m-d h:i:s");

	$query = "insert into projects (name,details,datetime,platform,status) values ('$name','$details','$datetime','$platform','$status')";
	$result = mysqli_query($db,$query);
	echo "<script> window.location = 'projects.php';</script>";
}

 ?>
 
<body>
	<?php @include('loader.php');?>
	<?php @include('topbar.php');?>
	
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row">				
				<?php @include('sidebar.php');?>
				<div class="col-xl-9 col-lg-8 col-md-12">					
				<?php @include('pagebar.php');?>

		 <div class="row">
	 <form action="" method="post" style="width:100%;display: flex;">
		<div class="col-md-6 d-flex">
			<div class="card ctm-border-radius shadow-sm flex-fill grow">
				<div class="card-header">
					<h4 class="card-title mb-0">Name</h4>
				</div>
				<div class="card-body">
					 
						<div class="form-group">
							<label>New Project</label>
							 <input class="form-control" type="text" name="name" required>
						</div> 
						<div class="form-group">
							  <label for="sel1">Platform</label>
							  <select class="form-control" name="platform">
							    <option value="wordpress">Wordpress</option>
							    <option value="graphics">Graphics</option>
							    <option value="php">Php</option>
							    <option value="laravel">Laravel</option>
							    <option value="frontend">Front end</option>
							    <option value="socialmedia">Social Media</option>
							    <option value="digitalmarketing">Digital Marketing</option>
							  </select>
							</div>


					 
				</div>
			</div>
		</div>
		<div class="col-md-6 d-flex">
			<div class="card ctm-border-radius shadow-sm flex-fill grow">
				<div class="card-header">
					<h4 class="card-title mb-0">Details</h4>
				</div>
				<div class="card-body">
					 
						<div class="form-group">
							<label>Descraption</label> <textarea class="form-control" type="text" rows="10" name="details" required> </textarea>
						</div>
						<div class="text-center">
							<input type="submit" name="submit" class="btn btn-theme button-1 ctm-border-radius text-white"  value="save changes">
						</div>
					 
				</div>
			</div>
		</div>

	</form>


	</div>







	






				</div>
			</div>
		</div>
	</div><?php @include('footer.php');?>
</body>
</html>