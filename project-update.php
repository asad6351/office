<?php @include('header.php');?>
 <?php 
if(isset($_POST['submit'])){
	
					 $id = $_GET['id'];
 	$details = $_POST['details'];
 
 

	$query= "update projects SET`details`='$details' where id=$id";
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
	 
		<div class="col-md-12 d-flex">
			<div class="card ctm-border-radius shadow-sm flex-fill grow">
				<div class="card-header">
					<h4 class="card-title mb-0">Details</h4>
				</div>
				<div class="card-body">
					 <?php 
					 $id = $_GET['id'];
									$query = "select * from projects where id=$id ";

									$result=mysqli_query($db,$query);
									while($row=mysqli_fetch_assoc($result)){ 

									 
										?>
						<div class="form-group">
							<label>Descraption</label> <textarea class="form-control" type="text" rows="10" name="details" > <?php echo $row['details'];?></textarea>
						</div>
					<?php } ?>
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