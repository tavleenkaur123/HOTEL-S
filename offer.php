<?php
$op=$_POST['services'];
$nm=$_POST['name'];
$em=$_POST['email'];
$ct=$_POST['contact'];
$dt=$_POST['date'];

include('connect2.php');
$sql="INSERT INTO offers(category,name,email,contact,date)
  VALUES ('$op','$nm','$em','$ct','$dt')";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=offerform.html'>";
$conn->close();
?>