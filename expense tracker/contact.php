<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
    font-size:25px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.a{
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: skyblue;
    position: fixed;
    top: 0;
    width: 100%;
    font-size:25px;

text-align: center;}



.b {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-right: 10px;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 50px;
    width: 100%;
    font-size:25px;
}

 .head {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.contact{
	margin-top:200px;
	text-align:center;
}
</style>
</head>
<body background="images/expense5.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
  <?php
  if(!isset($_SESSION['user'])){
  echo'
  <li><a href="home.php">Home</a></li>
  <li><a  href="login.php">Login</a></li>
  <li><a href="register.php">Register</a></li>';
  
  }
  else{
  echo'
    <li><a href="mybills.php">My Bills</a></li>
    <li><a  href="addbills.php">Add Bills</a></li>
    <li><a  href="report.php">Report</a></li>
    <li><a  href="signout.php">Logout</a></li>';
   
  }
  
  ?>
  <li><a class="active"  href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:1500px;">

<br>
<div class="contact">
<h1>Phone : 9790713787</h1>
<h1>E-mail : admin@jandj.ac.in</h1>
<h1>All rights reserved. J & J Inc.</h1>
</div>
</div>

</body>
</html>

