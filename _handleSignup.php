<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_email=$_POST['signupEmail'];
    $pass=$_POST['signupPassword'];
    $cpass=$_POST['signupcPassword'];
    //check whether this email exists
    $existSql="select * from user where user_email='$user_email'";
    $result=mysqli_query($conn, $existSql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        $showError =  "Email is already exists";
    }
    else{
        if($pass=$cpass){
            $hash=password_hash($pass, PASSWORD_DEFAULT);
            $sql="INSERT INTO `user` ( `user_email`, `user_pass`, `timstamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
                $showAlert=true;
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }

        }else{
            $showError="Password is not matched";
            
        }
    }
    // header("Location: /forum/index.php?signupsuccess=false&error=$showError");

}

?>