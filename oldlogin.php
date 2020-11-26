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
if(isset($_POST['Login']))
{
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

  $sql_query = "SELECT * FROM signup WHERE Email='$Email' AND Password='$Password'";
$result = mysqli_query($conn, $sql_query);
  if(mysqli_num_rows($result)>0)
  {
    
    header('Location : profile.html');
}
  else
  {
    echo "Invalid email or Password";
  }
  mysqli_close($conn);
}
?>