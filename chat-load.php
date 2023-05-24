<?php

  @include('db.php');
// $sql = "SELECT * FROM chat";
// $result = mysqli_query($db, $sql) or die("SQL Query Failed.");
// $output = "";
// if(mysqli_num_rows($result) > 0 ){
  

//               while($row = mysqli_fetch_assoc($result)){
//                 $output = "{$row["message"]}";
//               }
    

//     mysqli_close($db);

//     echo $output;
// }else{
//     echo "<h2>No Record Found.</h2>";
// }
?>


<?php
  //include 'db.php';
    $query="SELECT * from chat ";
    $result=mysqli_query($db, $query);

    $json = array();
    $total_records = mysqli_num_rows($result);

if($total_records > 0){
  while ($row = mysqli_fetch_array($result)){
    $json[] =  $row['message'];
  }
}
echo json_encode($json);
    
 ?>


 



