<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
       $con = mysqli_connect("db.sice.indiana.edu","i494f20_dbakhshi","my+sql=i494f20_dbakhshi","i494f20_dbakhshi");
      
      $sql = "SELECT id FROM admin WHERE username = '$i494f20_dbakhshi' and passcode = '$my+sql=i494f20_dbakhshi";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
        
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "";
      }
   }
?>
<html>
   
   <head>
<center>
    <body style="background-color:#FAF5F5">

   <center><h1>Welcome to our Blog Page</h1></center>
<hr style="height:1px;border-top:1px solid #black" /></center>

<hr style="height:1px;border-top:1px solid #black" /></center>
      <title>Login Page</title>
<p><center> Please enter your  username and password<center></p>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:15px;
         }
         label {
            font-weight:bold;
            width:200px;
            font-size:15px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
    
      <div align = "center">
         <div style = "width:500px; border: solid 2px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"><b>Login</b></div>
                
            <div style = "margin:50px">
               
               <form action = "" method = "post">
                  <label>Username  </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  </label><input type = "password" name = "password" class = "box" /><br/><br />
                  
                    <a href="http://cgi.sice.indiana.edu/~dbakhshi/Blog/Blog.html">Login</a>
                    
               <div style = "font-size:15px; color:#pink; margin-top:20px"><?php echo $error; ?></div>
                    
            </div>
                
         </div>
            
      </div>

   </body>
</html>
