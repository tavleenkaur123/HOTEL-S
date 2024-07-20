<?php
$rm=$_POST['rooms'];
$ad=$_POST['adults'];
$kd=$_POST['kids'];
$pt=$_POST['pets'];
$nm=$_POST['name'];
$ct=$_POST['contact'];
$em=$_POST['email'];
$dt=$_POST['checkin-date'];
$dt2=$_POST['checkout-date'];

include('connect2.php');
$sql="INSERT INTO familysuite(rooms,adults,kids,pets,name,contact,email,checkin_date,checkout_date)
  VALUES ($rm,$ad,$kd,$pt,'$nm','$ct','$em','$dt','$dt2')";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=plus.html'>";
$conn->close();
?>