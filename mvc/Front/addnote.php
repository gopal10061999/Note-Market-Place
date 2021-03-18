
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Notes Market Place</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/addnote.css">



</head>

<body>
   <?php 

    
    
    /*
    
include 'connection.php';
//error_reporting(0);

    

     
if(isset($_POST['submit'])) {
   // $created_date = mysqli_real_escape_string($conn, $_POST['created_date']);
   // $upload_pic = mysqli_real_escape_string($conn, $_POST['upload_pic']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    //note_type
    $filee = mysqli_real_escape_string($conn, $_POST['file
    ']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $sell_for = mysqli_real_escape_string($conn, $_POST['sell_for']);
    //is_paid
    $money = mysqli_real_escape_string($conn, $_POST['money']);
    //selling_price
  //  $file = mysqli_real_escape_string($conn, $_POST['file']);
    //display_picture
    $professor=mysqli_real_escape_string($conn, $_POST['professor']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $display_picture = mysqli_real_escape_string($conn, $_POST['upload_pic']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
   // $action = mysqli_real_escape_string($conn, $_POST['note_type']);
    $number = mysqli_real_escape_string($conn, $_POST['Number']);
    $course_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    
    
    
    
    echo "title:$title.<br>";
    echo "type:$type.<br>"; 
    echo "decsription:$description.<br>";
     echo "country:$country.<br>"; 
    echo":page _no$number.<br>";
    echo "picture:$display_picture.<br>";
    echo "University:$institution.<br>"; 
    echo"Course:$course.<br>";
    echo "Professor:$professor.<br>";
    echo "price:$sell_for.<br>";
    //echo"Price_money:$money.<br>";
    //echo "File_Nmae:$file.<br>";

$queryyy= "INSERT INTO seller_notes (seller_id,title,note_type,description,country,number_of_pages,display_picture, ,university_name,course,professor,is_paid) VALUES ('1','$title', '$type', '$description', '$country','$number','$display_picture',$institution','$course','$professor','$sell_for')";
    
    if($queryyy){
        echo"<br>.done.<br>";
        
    }
    else{
        echo"not done";
    }

    $qq=mysqli_query($conn,$queryyy);
    if($qq){
        echo"final done";
        
    }
    else{
        echo"not done";
    }
    
    //"insert into seller_notes  (created_date,title,category,status,number_of_pages) values('$created_date','$title','$category','$status','$number','null')"
   
$q="INSERT INTO seller_notes (seller_id,title,note_type,description,country,number_of_pages,display_picture, ,university_name,course,professor,is_paid) VALUES ('1','$title', '$type', '$description', '$country','$number','$display_picture',$institution','$course','$professor','$sell_for')";
    if($q){
        echo"ddddd";
    }
    else{
        echo "not dddd";
    }
}
    
    */
    
    
    
    
  
include "connection.php";
session_start();
ob_start();
$isflag = 0;
if (isset($_POST['submit'])) {
    
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $display_pic = mysqli_real_escape_string($conn, $_POST['upload_pic']);
    $uploadnote = mysqli_real_escape_string($conn, $_POST['upload_note']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $no_of_pages = mysqli_real_escape_string($conn, $_POST['Number']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $institute = mysqli_real_escape_string($conn, $_POST['institution']);
    $coursename = mysqli_real_escape_string($conn, $_POST['course']);
    $coursecode = mysqli_real_escape_string($conn, $_POST['course_code']);
    $professor = mysqli_real_escape_string($conn, $_POST['professor']);
    $ispaid = mysqli_real_escape_string($conn, $_POST['sell_for']);
    $sellingprice = mysqli_real_escape_string($conn, $_POST['money']);
    $notepreview = mysqli_real_escape_string($conn, $_POST['file']);
    
    
    $aquery = "INSERT INTO sellernotes(seller_id, status,action_by,admin_remarks, title, category,display_picture,note_type, number_of_pages, description,university_name, country,course,course_code,professor,is_paid,selling_price,notes_preview,created_date, created_by, modified_date, modified_by, is_active) VALUES ('1', '1', '1', NULL, '$title', '1', '$display_pic', '1', '$no_of_pages', '$description','$institute', '1', '$coursename', '$coursecode', '$professor', '$ispaid', '$sellingprice', '$notepreview', NULL, NULL, NULL, NULL, b'0')";
    
    $query = mysqli_query($conn, $aquery);
    
    ?>
    if($query){

        <script>
        alert("invoked query inserted");
        </script>
        
    } 
    <?php
    
} 
$isflag = 1;
if (isset($_POST['publish'])) {
    
}

   

?>
    
 <nav class="navbar navbar-expand-lg navbar-light white-nav-top bg-white sticky-top" >
        <div class="container">
            <a class="navbar-brand" href="../index.html"><img src="images/top-logo1.png" id="toplogo" style="width: 220px; height: 40px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse animate-top" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                   
                  <li class="nav-item dropdown dropdown-container">
                        <a class="nav-link dropdown-toggle nav-link-fade-up" style="font-weight: 550;
                           color:
                         black; min-width:130px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                           Search Notes
                        </a>
                        
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link nav-link-fade-up" href="" style="font-weight: 550;
                          font-size: 13x;color: black; min-width: 148px;" >Sell Your Notes<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-fade-up" href="#" style="font-weight: 550;
                         font-size: 13px;
                          color: black; min-width: 137px;">Buyer Requests</a>
                    </li>


                   
           
                    <li class="nav-item">
                        <a class="nav-link nav-link-fade-up" href="#" style="font-weigh:550; font-size:13px; color: black;">
                        FAQ
                   </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-fade-up" href="#" style="font-weight: 700;
                          font-size: 13px;color: black; min-width: 101px;">Contact Us
                   </a>
                    </li>
                    
                    <li class="nav-item dropdown dropdown-container">
                        <a class="nav-link dropdown-toggle " style="font-weight: 600; color: black;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                           <img src="images/user-img.png" id="addaus">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropadmin1">
                            <a class="dropdown-item nav-link-fade-up" href="#">Update Profile</a>
                            <a class="dropdown-item nav-link-fade-up" href="#">Change Password</a>
                            
                            <a class="dropdown-item nav-link-fade-up" href="#" id="logout-dash">
                            LOGOUT</a>
                            
                        </div>
                    </li>
                    
                    
                    <li class="nav-item" id="bbttnn">
                        <a href="#"><button type="button" class="btn btn-primary btn_login">Logout</button></a>
                    </li>
                </ul>
                <!--   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->
            </div>
        </div>
    </nav>
   
   
    <section id="setimg">
        <img src="images/banner-with-overlay.jpg" class="banner">
        <h3 class="se" id="sf"><b>Note Details</b></h3>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h2 class="ba">
                    Basic Note Details
                </h2>
            </div>
        </div>
    </section>

    <form method="POST">    
    <section id="upperbasic">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" id="basic1">
                    <p class="finat">Title *</p>
                    <input type="text" name="title" value="" placeholder="Enter your notes title" class="basicc1" required id="basici1">

                    <p class="propic">Profile Picture</p>
                    <input type="text" name="upload_pic" value="" placeholder="" Rowspan="3" class="email" id="propicin">
                    <p id="is"><img src="images/upload-file.png" id="see"></p>
                    <p id="ist">Upload Picture</p>

                    <p class="typet">Type</p>
                    <select id="basici1" class="form-contro basicc1" name="type">
                        <option value="hide">Select Your note type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>



                </div>
                <div class="col-md-6 col-sm-12" id="basic1">
                    <p class="finat">Category *</p>
                    <select id="basici1" class="form-contro basicc1" name="category">
                        <option value="hide">Select Your category</option>
                        <option value="Science">Science</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Social">Social</option>
                        <option value="IT">IT</option>
                        <option value="Lorem">Lorem</option>
                        
                                                

                        
                    </select>


                    <p class="propic">Upload your notes</p>
                    <input type="text" name="upload_note" value="" placeholder="" Rowspan="3" class="email" id="propicin">
                    <p id="is"><img src="images/upload-note.png" id="see"></p>
                    <p id="ist">Upload your notes</p>

                    <p class="propic" id="pageno">Number of Pages</p>
                    <input type="text" name="Number" value="" placeholder="Enter your notes title" class="basicc1" required id="basici1">

                </div>

                <div class="col-md-12 col-sm-12" id="description">
                    <p class="dest">Description *</p>
                    <textarea class="col-md-12 col-sm-12" id="desi" rows="5" name="description" placeholder="Enter your description"></textarea>
                </div>

                <div class="col-md-12" id="ininfo">
                    <h3>institution Information</h3>
                </div>

                <div class="col-md-6 col-sd-12">
                    <p class="finat">Country</p>
                    <select id="basici1" class="form-contro basicc1" name="country">
                        <option value="hide">Select Your country</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                         <option value="Brazil">Brazil</option>
                         <option value="China">China</option>
                         <option value="Japan">Japan</option>
                    </select>
                </div>

                <div class="col-md-6 col-sd-12">
                    <p class="finat">Institution Name</p>
                    <input type="text" name="institution" value="" placeholder="Enter your institution name" class="basicc1" required id="basici1">
                </div>

                <div class="col-md-12" id="ininfo">
                    <h3>Course Details</h3>
                </div>

                <div class="col-md-6 col-sd-12">
                    <p class="finat">Course Name</p>
                    <input type="text" name="course" value="" placeholder="Enter your course name" class="basicc1" required id="basici1">

                    <p class="finat">Professor/Lecturer</p>
                    <input type="text" name="professor" value="" name="pro"   placeholder="Enter your professor name" class="basicc1" required id="basici1">
                </div>

                <div class="col-md-6 col-sd-12">
                    <p class="finat">Course Code</p>
                    <input type="text" name="course_code" value="" placeholder="Enter your course name" class="basicc1" required id="basici1">
                </div>


                <div class="col-md-12 col-sm-12" id="ininfo">
                    <h3>Selling Information</h3>
                </div>

                <div class="col-md-6 col-sd-12">
                    <div class="col-md-12">

                        <p id="sefo">Sell For *</p>
                        <input type="radio" name="sell_for" value="Free" id="rad1" class="radio" required>
                        <label id="lab1" class="free" >Free</label>

                        <input type="radio" name="sell_for" value="Paid" id="rad1" name="money" class="radio">
                        <label id="lab2" class="paid">Paid</label>

                    </div>


                    <p class="finat" id="sepri">Sell Price *</p>
                    <input type="text" name="full-name" 
                           name="money" value="" placeholder="Enter your price" class="basicc1" required id="basici1">
                </div>

                <div class="col-md-6 col-sd-12">
                   <p class="propic" id="notepre">Note Preview</p>
                    <input type="text" name="file" value="" placeholder="" Rowspan="3" class="upload" id="propicin">
                    <p id="is"><img src="images/upload-file.png" id="see"></p>
                    <p id="ist">Upload a file</p>
                </div>
                
                <div class="col-md-12" id="btngroup">
                   
                    <input type="submit" value="SAVE" name="submit" id="savebtn">
                                    
                    <input type="submit" value="PUBLISH" name="submit" id=publishbtn>    

                </div>
                

            </div>

        </div>
    </section>
    </form>

     <!--    footer  -->
    <section class="footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-6 footer_content">
                    <p>Copyright © <a href="https://www.tatvasoft.com/">TatvaSoft</a> All Rights Reserved.</p>
                </div>
                <div class="col-md-6 footer_social text-right">
                    <ul class="social-list">
                        <li><a href="#">
                                <i class="fa fa-facebook"></i>
                            </a></li>
                        <li><a href="#">
                                <i class="fa fa-twitter"></i>
                            </a></li>
                        <li><a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>