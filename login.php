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

   $sql_query = "select count(*) as cntUser from signup where Email='".$Email."' and Password='".$Password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count > 0){
            $_SESSION['Email'] = $Email;
            header('Location: project.html');
        }else{
            echo "Invalid username and password";
        }
  mysqli_close($conn);
}
?>
