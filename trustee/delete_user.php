<?php 

include('includes/db.php');

    if(isset($_GET['user_id'])){
        
        $delete_id = $_GET['user_id'];
        
        $delete_user = "delete from user where user_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_user);
        
        if($run_delete){
            
            echo "<script>alert('One of your user has been Deleted')</script>";
            
            echo "<script>window.open('userlist.php','_self')</script>";
            
        }
        
    }

?>