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
         
         header("location: rate.php");
      }else {
         $error = "";
      }
   }
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: #f1f1f1;
  color: #A89898;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #f1f1f1;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #f1f1f1;
  color: black;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 100%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {
  flex: 100%;
  background-color: white;
  padding: 20px;
}

.fakeimg {
  background-color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

@media screen and (max-width: 500px) {
  .row {
    flex-direction: column;
  }
}

@media screen and (max-width: 250px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>

<center><div style="background:#A89898">
Welcome to feedback pull home page</div></center>

<div class="header">
  <center><h1>Event feedback</h1></ceneter>
</di

<div class="row">
  <div class="side">
    <center><h5>Bloomington, Indiana </h5>
   <img src="db5.jpg".jpg" alt="">
</center>
    <p>More information is coming here</p>
  <div class="main">
<h4><i>Please tell us what you think about this website, and fill out the feedback form below. Thank you.</h4></i></center>

</div>
<center>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style></center>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
    <a href="#activity">Activity</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
<center>
    <div class="dropdown-content">
      <a href="https://www.visitbloomington.com/events/">Events</a>
      <a href="https://www.visitbloomington.com/things-to-do/">Activity</a>
      <a href="https://www.visitbloomington.com/restaurants/">Travel</a>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
    
input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid rgb(70, 68, 68);
  border-radius: 4px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid rgb(70, 68, 68);
  border-radius: 4px;
  resize: vertical;
}
    
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
    
input[type=submit] {
  background-color: red;
  color: white;
  padding: 5px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
    
input[type=submit]:red {
  background-color: #45a049;
}
    
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
    
.col-10 {
  float: left;
  width: 15%;
  margin-top: 6px;
    
.col-50 {
  float: left;
  width: 50%;
  margin-top: 6px;
}
     
.row:after {
  content: "";
  display: table;
  clear: both;
}
    
</style>
</head>
<body>
<h2>User Feedback</h2>
<div class="container">
  <form>
    <div class="row">
      <div class="col-10">
        <label for="fname">First Name</label>
      </div>
      <div class="col-50">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-10">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-50">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
        <div class="col-10">
          <label for="email">Email Address</label>
        </div>
        <div class="col-50">
          <input type="email" id="email" name="mailid" placeholder="Your email address..">
        </div>
      </div>
    <div class="row">
      <div class="col-10">
        <label for="country">Country</label>
      </div>
      <div class="col-50">
        <select id="country" name="country">
            <option value="none">Select Country</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="russia">Russia</option>
          <option value="japan">Japan</option>
          <option value="india">India</option>
          <option value="china">China</option>
          <option value="afghnaistan">Afghanistan</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-10">
        <label for="feed_back">User FeedBack</label>
      </div>
      <div class="col-50">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
            <a href="http://cgi.sice.indiana.edu/~dbakhshi/Feedback/feedback.html"><cenetr><b>Submit</b></a></center>
    </div>
  </form>
</div>
    
</body>
</html>
