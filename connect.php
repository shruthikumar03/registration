<?php
$servername="localhost";
$username="root";
$password="";
$database_name="user";

        $conn=mysqli_connect($servername,$username,$password,$database_name);
        if(!$conn)
        {
          die("Connection Failed:!" . mysqli_connect_error());
        }
if(isset($_POST['signupbtn']))
{
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $RepeatPassword = $_POST['RepeatPassword'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $Birthday = $_POST['Birthday'];

  $sql_query = "INSERT INTO signup(FirstName,LastName,Email,Password,RepeatPassword,PhoneNumber,Birthday)
  VALUES('$FirstName','$LastName','$Email','$Password','$RepeatPassword','$PhoneNumber','$Birthday')";

  if(mysqli_query($conn, $sql_query))
  {
    header("Location:Login.html");
  }
  else
  {
    echo "eRROR!" . mysqli_error($conn);
  }
  mysqli_close($conn);
}