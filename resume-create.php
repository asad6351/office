<?php @include('header.php');?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

 <?php 
if(isset($_POST['submit'])){
	$date = $_POST['date'];
	$name = $_POST['name'];
	$remarks = $_POST['remarks'];
	$platform = $_POST['platform'];
	$city = $_POST['city'];
	$desicion = $_POST['desicion'];
	$score = $_POST['score'];

	$phone = $_POST['phone'];
	$lavel = $_POST['lavel'];
	//$uploaded_files = $_POST['uploaded_files'];
	$status = 1;

	date_default_timezone_set("Asia/Karachi");
	$datetime = date("Y-m-d h:i:s");


 
 $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["uploaded_files"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

$source       = $_FILES["uploaded_files"]["tmp_name"];
$destination  = "uploaded_files/{$basename}";

/* move the file */
move_uploaded_file( $source, $destination );

//echo "Stored in: {$destination}";



 

	$query = "insert into resume (name,remarks,date,platform,city,resume,score,desicion,phone,lavel) values ('$name','$remarks','$date','$platform','$city','$destination','$score','$desicion','$phone','$lavel')";
	//echo $query;die();
	$result = mysqli_query($db,$query);
	 echo "<script> window.location = 'resume.php';</script>";
	//die('ssssssssaaaaaaaaaaaaaa');
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
									<a class="text-white" href="#">Admin Dashboard</a>
								</li>
								<li class="list-group-item text-center button-6">
									<a class="text-dark" href="#">Resume</a>
								</li>
							</ul>
						</div>
					</div>

		 <div class="row">
	 <form action="" method="post" style="width:100%;display: flex;" enctype="multipart/form-data">
		<div class="col-md-6 d-flex">
			<div class="card ctm-border-radius shadow-sm flex-fill grow">
				<div class="card-header">
					<h4 class="card-title mb-0">Name</h4>
				</div>
				<div class="card-body">
					 
						 

					<div class="form-group">
							<label>Date</label>
							<div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy" style="padding-bottom: 20px;">
							    <input class="form-control" type="text" name="date" readonly />
							    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
						</div>




						<div class="form-group">
							<label>Name</label>
							 <input class="form-control" type="text" name="name" required>
						</div> 
						<div class="form-group">
							<label>number</label>
							 <input class="form-control" type="text" name="phone" required>
						</div> 
						<div class="form-group">
							<label>city</label>
							 <input class="form-control" type="text" name="city" required>
						</div> 
						<div class="form-group">
							  <label for="sel1">Platform</label>
							  <select class="form-control" name="platform">
							    <option value="wordpress">Wordpress</option>
							    <option value="graphics">Graphics</option>
							    <option value="php">Php</option>
							    <option value="laravel">Laravel</option>
							    <option value="frontend">Front end</option>
							    <option value="flutter">Flutter</option>

							    <option value="react_native">React Native</option>
							    <option value="android">  Android</option>
							    <option value="ios"> IOS</option>

							    <option value="socialmedia">Social Media</option>
							    <option value="digitalmarketing">Digital Marketing</option>
							  </select>
							</div>
						<div class="form-group">
							  <label for="sel1">Score</label>
							  <select class="form-control" name="score">
							    <option value="none">none</option>
							    <option value="1">1</option>
							    <option value="2">2</option>
							    <option value="3">3</option> 
							    <option value="4">4</option> 
							    <option value="5">5</option> 
							    <option value="6">6</option> 
							    <option value="7">7</option> 
							    <option value="8">8</option> 
							    <option value="9">9</option> 
							    <option value="10">10</option> 
							  </select>
							</div>
						<div class="form-group">
							  <label for="sel1">lavel</label>
							  <select class="form-control" name="lavel">
							    <option value="Intern">Intern</option>
							    <option value="junior">junior</option> 
							    <option value="senior">senior</option> 
							    <option value="senior_pro">senior pro</option> 
							  </select>
							</div>
						<div class="form-group">
							  <label for="sel1">Desicion</label>
							  <select class="form-control" name="desicion">
							    <option value="waiting_for_interview">Waiting for interview</option>
							    <option value="notrecomend">not recommended</option>
							    <option value="recomend">recommend</option> 
							    <option value="high_recomend">highly recommended</option> 
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
							<label>Descraption</label> <textarea class="form-control" type="text" rows="5" name="remarks" required> </textarea>
						</div>
						<div class="form-group">
							<label>Resume</label>
							 <input class="form-control" type="file" name="uploaded_files" >
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

	<script>
$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});


</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

</body>
</html>