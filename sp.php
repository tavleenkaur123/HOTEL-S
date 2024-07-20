<?php
$ev=$_POST['event'];
$gt=$_POST['guest'];
$nm=$_POST['name'];
$em=$_POST['email'];
$ct=$_POST['contact'];
$dt=$_POST['date'];

include('connect2.php');
$sql="INSERT INTO specialevents(eventname,guests,name,email,contact,date)
  VALUES ('$ev','$gt','$nm','$em','$ct','$dt')";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=spev.html'>";
$conn->close();
?>