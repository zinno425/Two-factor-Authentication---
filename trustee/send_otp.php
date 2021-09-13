<?php



 include('includes/db.php');

 include('function/function.php');



if(isset($_GET['req_id'])){
    
    $otp = getOTP();
    
    $req_id = $_GET['req_id'];
    
    $data = "SELECT * FROM `otp` WHERE `req_id`='$req_id'";
    
    $run = mysqli_query($con,$data);
    
    $row = mysqli_fetch_array($run);
    
    $user_mail= $row['user_mail'];
    
   
    
    $get_id = "SELECT * FROM `mail_user` WHERE `mail_id`='$user_mail'";
    
   $runn = mysqli_query($con,$get_id);
    
    $roww = mysqli_fetch_array($runn);
    
    $mu_id =  $roww['mu_id'];
    
    if($run){
     
        $sender_name = "CloudBlast Trustee";
        $sender_mail = "trustee@cloudblast.in";
        $subject = "OTP Verification";
        $content = "Your One time password for authorisation is ".$otp." .";
        
        
    $send_mail = "INSERT INTO `mail`(`mu_id`, `email_id`, `sender_name`, `sender_mail`, `date`, `subject`, `content`) VALUES ('$mu_id','$user_mail','$sender_name','$sender_mail',NOW(),'$subject','$content')";
        
        $run_mail = mysqli_query($con,$send_mail);
        
        if($run_mail){
            
            $status = "Issued";
            
            $update = "UPDATE `otp` SET `otp`='$otp',`status`= '$status' WHERE `user_mail`='$user_mail'";
            
            $update2 = "UPDATE `user` SET `user_otp`= '$otp' WHERE `user_mail`='$user_mail'";
            
            $run_update = mysqli_query($con,$update);
            $run_update2 = mysqli_query($con,$update2);
            
            if($run_update && $run_update2 ){
                
                echo "<script>alert('Key send successfull')</script>";
                  echo "<script>window.open('request.php','_self')</script>";
                
            }
            
            
            
        }
        
        
        
        
        
        
        
        
    }
 
    
    
    
}



?>