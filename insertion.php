<?php
$nm=$_POST['name'];
$ct=$_POST['contact'];
$em=$_POST['email'];
$rv=$_POST['review'];

include('connect2.php');
$sql="INSERT INTO reviews(name,contact,email,review)
  VALUES ('$nm','$ct','$em','$rv')";
  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    echo "<meta http-equiv='refresh' content='2; url=reviews.html>";
$conn->close();
?>