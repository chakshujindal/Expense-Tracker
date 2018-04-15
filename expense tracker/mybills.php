<?php

session_start();
if (isset($_POST['type'])) 
{$_SESSION['type']=$_POST['type'];
?>
<script type="text/javascript">
        window.location="report.php";
        </script>
<?php
}



?>
<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;overflow: hidden;}

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

.user{      
       background-color: rgba(0, 0, 0, 0.4);
       margin-left: 20%;
       margin-right: 20%;
       margin-top: 200px;
       
  
}

button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;

    background-color:#1abc9c;
    color: white;
   
}

button:hover {
    background-color: rgba(0, 0, 0, 0.4);
    color: white;
}

</style>
</head>
<body background="images/expense1.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
    <li><a class="active" href="mybills.php">My Bills</a></li>
  <li><a  href="addbills.php">Add Bills</a></li>
  <li><a  href="report.php">Report</a></li>
  <li><a  href="signout.php">Logout</a></li>
  <li><a   href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:5px;:#1abc9c;height:1500px;">
<div class="user" align="center">
<br>
<form action="mybills.php" method="post">
<button value="electricity" name="type" type="submit">Electricity</button><br><br>
<button value="water"  name="type" type="submit">Water</button><br><br>
<button value="phone"  name="type" type="submit">Phone</button><br><br>
<button value="food"  name="type" type="submit">Food</button><br><br>
<button value="rent"  name="type" type="submit">Rent</button><br>
<button value="other"  name="type" type="submit">Other</button><br>
</form>
<br>
</div>
</div>

</body>
</html>

