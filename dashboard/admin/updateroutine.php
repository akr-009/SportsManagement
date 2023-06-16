<?php
require '../../include/db_conn.php';
page_protect();
    
    
   $id=$_POST['cn'];
   $day1=$_POST['cmn'];
   $day2=$_POST['cmid'];
   $day3=$_POST['sname'];
 
    
    $query1="update timetable set day1='".$cn."',day2='".$cmn."',day3='".$cmid."',day4='".$sname."' where tid=".$id."";

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=viewroutine.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
