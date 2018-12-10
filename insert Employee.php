<?php
if($_POST){
 
    
    include 'configC:\Users\Abdelrahman AL-Abady\Desktop\project/db-connection.php';
 
    try{
     
        
        $query = "INSERT INTO Employee SET name=:name, Email=:Email, Mobile NO=:Mobile NO, HiringData=:HiringData";
        $query = "INSERT INTO Status SET Absent=:Absent, Day off=:dey off, present=:present, sick leave=:sick leave";
        $query = "INSERT INTO Attendance SET Day=:Day, Employee=:Employee, Status=:Status, Working Hours=:Working Hours";
        $query = "INSERT INTO User SET name=:name, email=:email, password=:password ;

       
        $stmt = $con->prepare($query);
 
        
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $email=htmlspecialchars(strip_tags($_POST['email']));
        $mobile no=htmlspecialchars(strip_tags($_POST['mbile no']));
        $Hiring data=htmlspecialchars(strip_tags($_POST['hiring data']));   
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile no', $mobile no);
         
         
        
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
         
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>