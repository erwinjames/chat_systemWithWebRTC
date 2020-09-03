<?php
 include('session.php');
if(isset($_POST['view'])){

$query = "SELECT * FROM invites where invite_to='$user' ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
  $output .= '
  Youve invited to this link <br>
  <li>
  <a href="'.$row["invites"].'">
  <strong>'.$row["invites"].'</strong><br />
  </a>
  </li>
  ';
}
}
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
$status_query = "SELECT * FROM invites where invite_to=null";
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);
echo json_encode($data);
}
?>