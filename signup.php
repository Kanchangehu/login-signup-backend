 <?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname='itbasket';
   
   $conn= mysqli_connect($servername, $username, $password, $dbname);

   if(!$conn){
    die("failed" .mysqli-connect_error());
   }
?>

<?php
   $username=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql= "INSERT INTO form(name, email, password) VALUES ('$username', '$email', '$password')";

   $result= mysqli_query($conn, $sql);

   if($result){
    echo "sucessful";
   }
   else{ 
    echo "error";
   }
   
   mysqli_close($conn);
?>