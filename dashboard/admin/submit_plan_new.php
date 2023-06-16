<?php
require '../../include/db_conn.php';
page_protect();

	$planid =$_POST['planid'];
    $name = $_POST['planname'];
   
    $planval = $_POST['planval'];
    $amount = $_POST['amount'];
    
   //Inserting data into plan table
    $query="insert into plan(pid,planName,validity,amount,active) values('$planid','$name','$planval','$amount','yes')";
   
   

	 if(mysqli_query($con,$query)==1){
        
        echo "<head><script>alert('PLAN Added ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=new_plan.php'>";
       
      }

    else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($con);
      }

?>
