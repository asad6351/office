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
	$status = $_POST['status'];
	$id=$_POST['id'];
	date_default_timezone_set("Asia/Karachi");
	$datetime = date("Y-m-d h:i:s");
	$query= "update projects SET`status`='$status' where id=$id";
	//echo $query;die();
	//$query = "insert into projects (name,details,datetime,platform,status) values ('$name','$details','$datetime','$platform','$status')";
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

				
 					<div class="card shadow-sm ctm-border-radius grow">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h4 class="card-title mb-0 d-inline-block">Projects</h4><a class="btn btn-theme button-1 ctm-border-radius text-white float-right" href="project-create.php"><span></span> Create Project</a>
		</div>
		<div class="card-body align-center">
			<div class="tab-content" id="v-pills-tabContent">
				<div aria-labelledby="v-pills-home-tab" class="tab-pane fade active show" id="v-pills-home" role="tabpanel">
					<div class="employee-office-table">
						<div class="table-responsive">

 


							<table class="table custom-table table-hover">
								<thead>
									<tr>
										<th> Name</th>
										<th>platform</th>
 										<th >details</th> 
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$query = "select * from projects ";

									$result=mysqli_query($db,$query);
									while($row=mysqli_fetch_assoc($result)){ 

										$platform = $row['platform'];
										$status = $row['status'];
										?>


									<tr>
										<td  style="width:20%"><?php echo $row['name'];?><Br>
											<span style="font-size:10px"><?php echo $row['datetime'];?> </span>
										</td>
										<td  style="width:10%"><?php echo $row['platform'];?><Br>
 										</td>
										<td  style="width:50%"class="wrapcoloumn" ><?php echo $row['details'];?></td>  

									
									 
										<td  style="width:20%">
											<div class="form-group"  data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>" >
 												  <select class="form-control" disabled>
												    <option value="1" <?php if($status=="1"){ echo "selected";} ?>>Just Created</option>
												    <option value="2" <?php if($status=="2") { echo "selected";}?>>Developer working</option>
 												    <option value="3" <?php if($status=="3") { echo "selected";}?>>Waiting for Client</option> 
												  </select>
												</div>
											<div class="table-action">
												<a class="btn btn-sm btn-outline-success" href="project-chat.php?id=<?php echo $row['id'];?>"><span class="lnr lnr-pencil"></span> chat</a>
												<a class="btn btn-sm btn-outline-success" href="project-update.php?id=<?php echo $row['id'];?>"><span class="lnr lnr-pencil"></span> Edit</a>

												 <a class="btn btn-sm btn-outline-danger" data-target="#delete" data-toggle="modal" href="#"><span class="lnr lnr-trash"></span> Complete</a>
											</div>
										</td>


<div id="myModal<?php echo $row['id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
      <div class="modal-body">
        <form action="" method="post">
        	<?php echo $row['id'];?>
        	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
        	<div class="form-group"  >
				  <select class="form-control" name="status" >
			    <option value="1" <?php if($status=="1"){ echo "selected";} ?>>Just Created</option>
			    <option value="2" <?php if($status=="2") { echo "selected";}?>>Developer working</option>
				    <option value="3" <?php if($status=="3") { echo "selected";}?>>Waiting for Client</option> 
			  </select>
			</div>

		<div class="form-group"  >
			<div class="text-center">
				<input type="submit" name="submit" class="btn btn-theme button-1 ctm-border-radius text-white" value="save changes">
			</div>
		</div>

	 </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



										<?php } ?>
									</tr>
									 
								</tbody>
							</table>





						</div>
					</div>
				</div>
			 



			</div>
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
