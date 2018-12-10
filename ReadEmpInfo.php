<?php

include 'configC:\Users\Abdelrahman AL-Abady\Desktop\project/db-connection.php';
  
$query = "SELECT name, email, mobile no, hiringdata FROM Employee ";
$stmt = $con->prepare($query);
$stmt->execute();
 

$num = $stmt->rowCount();
 
echo "<a href='insert Employee.php' >add New Employee</a>";
 
if($num>0){
     
}
 
else{
    echo "<div class='alert alert-danger'>No Employees found.</div>";
}
?>