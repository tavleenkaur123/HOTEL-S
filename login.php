<?php
$usern=$_POST['username'];
$op=$_POST['documenttype'];
$dn=$_POST['number'];
$email=$_POST['email'];
$code=$_POST['code'];


include('connect4.php');
$sql="INSERT INTO login(usern,documenttype,documentnumber,email,code)
  VALUES ('$usern','$op','$dn','$email','$code')";

  if($conn->query($sql)===TRUE){
    echo "Records Success";
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user inputs

    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["code"];
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Hash password
    $hashedPassword = md5($code); // Note: Use stronger hashing algorithms like bcrypt or SHA-256

    // Connect to the database (assuming you have already set up your database connection)

    // Query the database to check if the email and hashed password match
    // Example SQL query (assuming you have a table named 'users' with columns 'email' and 'password_hash'):
     $sql = "SELECT * FROM login WHERE email = '$email' AND password_hash = '$hashedPassword'";
    // Execute the query and handle the result
}
    echo "<meta http-equiv='refresh' content='2; url=login.html'>";
$conn->close();
?>