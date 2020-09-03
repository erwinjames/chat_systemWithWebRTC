<?php
include('session.php');

if(isset($_POST['search'])){
    $search = $_POST['search'];
   
    $query = "SELECT * FROM user WHERE username like'%".$search."%'";
    $result = mysqli_query($con,$query);
   
    $response = array();
    while($row = mysqli_fetch_array($result) ){
      $response[] = array("value"=>$row['userid'],"label"=>$row['username']);
    }
   
    echo json_encode($response);
   }
   
   exit;
?>