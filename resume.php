<?php @include('header.php');?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
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
				

				<div class="quicklink-sidebar-menu ctm-border-radius shadow-sm bg-white card grow">
						<div class="card-body">
							<ul class="list-group list-group-horizontal-lg">
								<li class="list-group-item text-center active button-5">
									<a class="text-white" href="index.html">Admin Dashboard</a>
								</li>
								<li class="list-group-item text-center button-6">
									<a class="text-dark" href="resume-create.php">Resume</a>
								</li>
							</ul>
						</div>
					</div>



				
 					<div class="card shadow-sm ctm-border-radius grow">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h4 class="card-title mb-0 d-inline-block">Resume</h4><a class="btn btn-theme button-1 ctm-border-radius text-white float-right" href="resume-create.php"><span></span> New Person </a>
		</div>
		<div class="card-body align-center">
			<div class="tab-content" id="v-pills-tabContent">
				<div aria-labelledby="v-pills-home-tab" class="tab-pane fade active show" id="v-pills-home" role="tabpanel">
					<div class="employee-office-table">
						<div class="table-responsive">

 
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
				<th> date</th>
				<th> Name</th>
				<th> phone</th>
				<th>platform</th>
				<th>City</th>
				<th>Score</th>
				<th>Lavel</th>
				<th>Desicion</th>
				<th >Remarks</th> 
				<th>Resume</th> 
            </tr>
        </thead>
        <tbody style="font-size: 12px;">
        	<?php 
				$query = "select * from resume order by id desc";
				$result=mysqli_query($db,$query);
				while($row=mysqli_fetch_assoc($result)){ 

			?>
            <tr>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['platform'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['score'];?></td>
                <td><?php echo $row['lavel'];?></td>
                <td> <?php echo $row['desicion'];?> </td>
                <td> <a  data-target="#remarks<?php echo $row['id'];?>" data-toggle="modal" href="javascript:void(0)"> open </a> </td>
                 <td><a href="<?php echo $row['resume'];?>" download> <span class="lnr lnr-download pr-0 pb-lg-2 font-23"></span>  </a></td>
            </tr>

            	<div class="modal fade" id="remarks<?php echo $row['id'];?>" style="zoom:0.8">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
			 
			 					<div class="wrapcoloumn"> <?php echo $row['remarks'];?> </div>
								 
							</div>
						</div>
					</div>
				</div>







        <?php } ?>
         
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
	</div>
	<?php @include('footer.php');?>

 

<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

	 
</body>
</html>
 
