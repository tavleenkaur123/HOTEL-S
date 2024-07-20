<?php
$rm=$_POST['tables'];
$ad=$_POST['adults'];
$kd=$_POST['kids'];
$pt=$_POST['pets'];
$nm=$_POST['name'];
$ct=$_POST['contact'];
$em=$_POST['email'];
$dt=$_POST['date'];
$tm=$_POST['time'];
include('connect4.php');
$sql="INSERT INTO whitevilla(tables,adults,kids,pets,name,contact,email,date,time)
  VALUES ($rm,$ad,$kd,$pt,'$nm','$ct','$em','$dt','$tm')";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=dinform.html'>";
$conn->close();
?>