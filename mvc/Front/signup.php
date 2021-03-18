
   <html>
    <head>
    <link rel="stylesheet" href="css/stylelogin.css">
    <title>Notes Market Place</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../Front/css/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="css/signupstyle.css">

<?php

//include 'connection.php';
//error_reporting(0);


?>

   
    <style type="text/css">
        #signt {
            margin-top: 20px;

        }

        #success {
            margin-top: -6px;
            margin-left: -30px;
            height: 25px;
            width: 25px;
        }

        #settt {
            text-align: center;
            margin-top: 20px;
            color: blue;
        }

        body {
            margin: 0px;
            padding: 0;
            background: url(images/banner-with-overlay.jpg);
            background-repeat: no-repeat;
            background-size: auto;
            background-position: center;
            font-family: sans-serif;
            margin-bottom: -40px;

        }
        #hide,#show{
position: absolute;
            margin-left: -35px;
            margin-top: 15px;
            font-size: 25px;
            float: right;
            overflow: visible;
            
        }
        #cshow{
            position: absolute;
            margin-left: 405px;
            margin-top: -35px;
            overflow: visible;

            font-size: 25px;
            float: right;
        }
    </style>

</head>

<body>
   

    <?php 

include 'connection.php';
include 'sendmail.php';
    error_reporting(0);

    
if(isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    
    $pass = password_hash($password, PASSWORD_DEFAULT);
    
    $token = bin2hex(random_bytes(15));
    $emailquery = "SELECT * FROM users WHERE emailid ='$email'";
    $equery = mysqli_query($conn,$emailquery);
   
    $result = mysqli_num_rows($equery);
    echo $result;  
    
    if($result>0) {
        ?>
                <script>
                    alert("email already exists")
                </script>
            <?php
                
        //echo "<br>.email already exists.<br>";
    } 
    else {
        if($password === $cpassword){
            
            
            $insertquery = "INSERT INTO users( role_id, firstname, lastname, emailid, password, token ,isemailverified, created_date, created_by, modified_date, modified_by, is_active) VALUES ('1', '$firstname', '$lastname', '$email', '$pass', '$token', b'0', NULL, NULL, NULL, NULL, b'1')";
  
            $iquery = mysqli_query($conn, $insertquery);
            
             if($iquery){
     
 }  
            
            if($iquery) {
            // This email address and name will be visible as sender of email
 
                $mail->addAddress($email);  // This email is where you want to send the email
                $mail->addReplyTo($config_email);   // If receiver replies to the email, it will be sent to this email address
 
                // Setting the email content
                $mail->IsHTML(true);  
                $mail->Subject = "Note Marketplace - Email Verification"; 
                
               
                
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
                            Thanks for Signing up! <br>
                            Simply click below for email verification.
                        </td>
                    </tr>
                    <tr style='height: 120px;font-size: 16px;font-weight: 400;line-height: 22px;color: #333333;margin-bottom: 50px;'>
                        <td style='text-align: center;'>
                            <button class='btn btn-verify' style='width: 100% !important;height:50px;font-family: Open Sans; font-size: 18px;font-weight: 600;line-height: 22px;color: #fff;background-color: #6255a5;border-radius: 3px;'><a class='btn' href='http://localhost/php/Note Market Place/front/login.php?token=$token' role='button' style='color: #fff; text-decoration: none; text-transform: uppercase;'>Verify email address</a>
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
            ?>
                <script>
                    alert("NO Inserted")
                </script>
            <?php
                
            } 
        }
        else {
            echo "password and confirm password should match";
        }
    }
}
mysqli_close($conn);

?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 
    
   
    <div class="login-box" id="log-bo">
        <img src="images/top-logo.png" class="logo" id="signlogo">
        <h1 class="lo">Create an Account</h1>
        <p class="te">Enter your details to signup</p>
        <form method="POST" action="<?php htmlentities($_SERVER['PHP_SELF']);?>">

          
                <div class="row" id="settt">
                <p><img src="images/SUCCESS.png" id="success">Your account has beensuccessfully created.</p>
            </div> 
            <p class="te1">First Name</p>
            <input type="text" name="fname" placeholder="Enter Your Name" class="input1" required>

            <p class="te2">Last Name</p>
            <input type="text" name="lname" placeholder="Enter Your Last Name" class="input1" required>

            <p class="te2">Email</p>
            <input type="text" name="email" placeholder="Enter Your Email Address" class="input1" required>



            <p class="te2">Password<span id="forget">Forget Password?</span></p>
            <input type="password" name="password" placeholder="Enter Your Password" class="input2" id="password" required>
           <!--<i class="fa fa-eye-slash" id="hide" onclick="myfun()"></i>
           //--> <i class="fa fa-eye" id="show" onclick="myfun()"></i>
            <!--<img src="images/eye.png" id="eye" class="eye" id="ey" onclick="myfun()">
-->
           
            <p class="te2" id="signt">Confirm Password</p>
            <input type="password" name="cpassword" placeholder="Re-enter Your Password" class="input2" id="password1" required>
             <i class="fa fa-eye" id="cshow" onclick="myfun1()"></i>
           <!-- <img src="images/eye.png" id="eye" class="eye" id="ey1" onclick="myfun()" style="margin-left:400px; margin-top:-30px;">
          
-->

   <input type="submit" name="submit" value="SIGN UP" class="butt" style="margin-top:40px;">
        <p class="si">Already have an account?<span class="siup"><a href="login.php">Login</a></span></p>
    
    
        </form>

    </div>
    
    
    <script type="text/javascript">
   
        function myfun(){
            var x=document.getElementById("password");
            if(x.type === "password"){
                x.type="text";
           

                
            }
            else{
                x.type="password";
                
            }
        }
        function myfun1(){
            var x=document.getElementById("password1");
            if(x.type === "password"){
                x.type="text";
           

                
            }
            else{
                x.type="password";
                
            }
        }
        
    </script>

   
   
    

<script>
    
    var state=false;
    function myfun(){
        if(state){
            document.getElementById('password').setAttribute("type","password");
            state = false;
            
             document.getElementById('password1').setAttribute("type","password");
            state = false;
        }
        else{
            document.getElementById('password').setAttribute("type","text");
                        state = true;
             document.getElementById('password1').setAttribute("type","text");
                        state = true;

        }
    }
    
    </script>-->

    <script src="js/script.js"></script>

    <script src="js/"></script>
</body>

</html>

