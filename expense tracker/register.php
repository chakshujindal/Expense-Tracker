<?php
include 'connection.php';

if (isset($_POST['submit'])) 
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];
    $number=$_POST['number'];
    $username=$_POST['username'];
    $date=$_POST['date'];
   
     $query="INSERT INTO user(name,email,username,password,dob,ph) VALUES('$name','$email','$username','$password','$date','$number')";
       $result = mysqli_query($connection,$query);
       if (!$result)
        echo "INSERT failed: $query<br>" .      $connection->error . "<br><br>";
      else
      {?>
<script type="text/javascript">
        window.location="login.php";
        </script>
    <?php

      }
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;
    overflow: hidden;
      } 

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
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
.user{ align-content: center;
       height:300px;
       width:350px;
       background-color: rgba(0, 0, 0, 0.4);
       margin-left: 40%;
       margin-top: 200px;
       
  
}

.table{
    align-content: center;
   align-items: center;

}
.tr{ right: 40px;

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
</style>
</head>
<body background="images/expense7.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
  <li><a href="home.php">Home</a></li>
  <li><a  href="login.php">Login</a></li>
  <li><a class="active" href="register.php">Register</a></li>
  <li><a   href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:650px; ">

<div class="user">
<br><br><br>
<form action="register.php" method="post">
<table>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Name:
</td>
<td> 
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Email: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Username:
</td>
<td> 
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Password: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password1">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Dob: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Phno: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="number">
</td>
</tr>
<tr>
<td></td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Sign Up"></td>
</tr>

</table>
</div>
</div>

</body>
</html>

