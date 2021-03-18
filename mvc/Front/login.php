<html>
    <head>
        <link rel="stylesheet" href="css/stylelogin.css">
        
         <link rel="stylesheet" href="../Front/css/font-awesome/css/font-awesome.css">

        <title>Notes Market Place</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/stylelogin.css">
        <style type="text/css">
        
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
        
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        
        
        
        
        <?php 

include 'connection.php';
error_reporting(0);


    
if(isset($_POST['submit'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
   
    $emailsearch = "SELECT * FROM users WHERE emailid ='$email'";
    $pquery = mysqli_query($conn,$emailsearch);
  
    $emailcount = mysqli_num_rows($pquery);
    
    $email_pass = mysqli_fetch_assoc($pquery);
        $db_pass = $email_pass['password'];
    
    
  
   
            $email_pass = mysqli_fetch_assoc($pquery);

    if($emailcount){
        $email_pass = mysqli_fetch_assoc($pquery);
        
        
        
        if($db_pass==$password){
            
        //if($decode){
           
            
             ?>
            <script>
               alert("login successfully");
            </script>
            <?php
            
            ?>
            <script>
               location.replace("homepage.php");
            </script>
            <?php
            
        }else{
            
            
            ?>
            <script>
               alert("password is incorrect");
            </script>
            <?php
            
                  
        }
        
    }else{
        
         ?>
            <script>
               alert("invalid email");
            </script>
            <?php
        
    }
    
}
mysqli_close($conn);    
?>
       <form method="POST">
        
        <div class="login-box">
          <img src="images/top-logo.png" class="logo" style="margin-top:-5px; margin-left:-0%;;">
          <h1 class="lo">Login</h1>
          <p class="te">Enter your email address and password to login</p>
       
          <p class="te1">Email</p>
          <input type="email" name="email"  placeholder="Enter Your Email" class="input1"  >
          
        
          
          <p class="te2">Password<span id="forget">Forget Password?</span></p>
          <input type="password" name="password" placeholder="Enter Your Password" class="input2" id="password1">
          <img src="../images/pre-login/images/eye.png" id="eye" class="eye" id="show" onclick="myfun()" style="margin-top:20px;">
              
         
          <p class="mess">The password that you've entered is incorrect</p>
          <input type="checkbox" name="checkbox" name="check box" class="checkbox">
          <p class="re">Remember Me</p>
          
          <input type="submit" name="submit" value="LOGIN" class="butt">
          <p class="si">Don't have account ?<a href="signup.php"><span class="siup"> Sign Up</span></a></p>
        </div>
    
    </form>
    
    
    <script src="../js/script.js"></script>
    
    <script src="js/"></script>
    
        
    <script type="text/javascript">
        
    function myfun(){
            var x=document.getElementById("password1");
            if(x.type === "password"){
                x.type="text";
           

                
            }
            else{
                x.type="password";
                
            }
        }
            
        
    </script>
        
    </body>
</html>