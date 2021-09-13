<?php 

include('includes/db.php');

    if(isset($_GET['file_id'])){
        
        $delete_id = $_GET['file_id'];
        
        $delete_file = "delete from file where file_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_file);
        
        if($run_delete){
            
            echo "<script>alert('One of your file has been Deleted')</script>";
            
            echo "<script>window.open('file.php','_self')</script>";
            
        }
        
    }

?>