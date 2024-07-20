<?php
$rm=$_POST['rooms'];
$ad=$_POST['adults'];
$ch=$_POST['child'];
$tn=$_POST['teenagers'];
$pt=$_POST['pets'];

include('connect.php');
$sql="INSERT INTO room(rooms,adults,child,teenagers,pets)
  VALUES ($rm,$ad,$ch,$tn,$pt)";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=form.html'>";
$conn->close();
?>