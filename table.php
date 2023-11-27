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
    $sql= "SELECT * FROM form";
    $result= mysqli_query($conn, $sql);

    if($result->num_rows >0){

        echo "<table>";
        echo "<tr> <th>Name</th> <th>Password</th> <th>email</th> </tr>";
        
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" .$row['name']. "</td><td>" .$row['password']. "</td><td>" .$row['email']. "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "your data is not found";
    }

    
        mysqli_close($conn);
?>