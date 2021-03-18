<html>
    <head>
        <link rel="stylesheet" href="stylelogin.css">
        
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        
        <title>Notes Market Place</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logo/favicon.ico">
        <style type="text/css">
            .input1{
                width: 480px;
                
            }
           
        body{
    margin: 0px;
    padding: 0;
    background: url(images/banner-with-overlay.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    background-position: center;
    font-family: sans-serif;
    margin-bottom: -40px;
   
}
        
     
        </style>
        
    </head>
    <body>
        <?php

  include 'connection.php';
        include 'sendmail.php';
    error_reporting(0);
        
        
        
        
        
        
        
        
        if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
   ;
   
    
   // $token = bin2hex(random_bytes(15));
    $emailquery = "select * from users where emailid= '$email' ";
    $equery = mysqli_query($conn,$emailquery);
   
    $result = mysqli_num_rows($equery);
    
    echo "$result";
    if($result) {
        
        $userdata = mysqli_fetch_array($equery);
        $username=$userdata['firstname'];
        $token=$userdata['token'];
        $password=$userdata['password'];
      /*  echo"$username";
        echo "<br>gopal<br>";
        echo "$token";
  echo "$password";*/
        
        
        
         $mail->addAddress($email);  // This email is where you want to send the email
                $mail->addReplyTo($config_email);   // If receiver replies to the email, it will be sent to this email address
 
                // Setting the email content
                $mail->IsHTML(true);  
                $mail->Subject = "Note Marketplace - Forget Password"; 
                
               
                
                $mail->Body = "
                <table style='height:60%;width: 60%; position: absolute;margin-left:10%;font-family:Open Sans !important;background: white;border-radius: 3px;padding-left: 2%;padding-right: 2%;'>
                <thead>
                    <th>
                        <img src='https://i.ibb.co/HVyPwqM/top-logo1.png' alt='logo' style='margin-top: 5%; margin-left: 0px;'>
                    </th>
                </thead>
                <tbody>
                    <tr style='height: 60px;font-family: Open Sans;font-size: 26px;font-weight: 600;line-height: 30px;color: #6255a5;'>
                        <td class='text-1'>Email Verification</td>
                    </tr>
                    <tr style='height: 40px;font-family: Open Sans;font-size: 18px;font-weight: 600;line-height: 22px;color: #333333;margin-bottom: 20px;'>
                        <td class='text-2'>Dear $firstname,</td>
                    </tr>
                    <tr style='height: 60px;'>
                        <td class='text-3'>
                            Your Password is $password .<br>
                            You want to change your password click bellow.
                        </td>
                    </tr>
                    <tr style='height: 120px;font-size: 16px;font-weight: 400;line-height: 22px;color: #333333;margin-bottom: 50px;'>
                        <td style='text-align: center;'>
                            <button class='btn btn-verify' style='width: 100% !important;height:50px;font-family: Open Sans; font-size: 18px;font-weight: 600;line-height: 22px;color: #fff;background-color: #6255a5;border-radius: 3px;'><a class='btn' href='http://localhost/php/Note Market Place/front/change.php?token=$token' role='button' style='color: #fff; text-decoration: none; text-transform: uppercase;'>Click Here To Change Password</a>
                            </button>
                        </td>
                    </tr>
                </tbody>
                </table>";

                $mail->send();
                $_SESSION['msg'] = "check your mail to activate your account $email";
                echo "email sent";
                
            
            
            
            
    } 
    else {
        
                echo "<br>.NO email Found.<br>";

    }
        }
        
  /*if(isset($_POST['submit'])){
      
      $email=mysqli_query($conn  ,$_POST['email']);
      
      $emailquery="select * from users where emailid='$email'";
      
      
      
      $result = mysqli_num_rows($emailquery);
      if($result){
          ?>
                <script>
                    alert("Connection done");
                </script>
            <?php
      }
  }*/
?>
        
        <div class="forget-box">
          <img src="images/top-logo.png" class="logo">
          <h1 class="lo">Forget Password?</h1>
          <p class="te">Enter your email to reset your password</p>
          <form method="post">
          <p class="te1">Email</p>
          <input type="email" name="email"  placeholder="Enter Your Email" class="input1"  >
          
        
          
          
          <input type="submit" name="submit" value="SUBMIT" class="subbutt">
            </form>
        </div>
    
    
    
    
    <script src="js/script.js"></script>
    
    <script src="js/"></script>
    </body>
</html>