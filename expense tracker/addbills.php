<?php
include 'connection.php';
session_start();
if (isset($_POST['submit'])) 
{$username=$_SESSION['user'];
$name=$_POST['name'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$date=$_POST['date'];


  $query="INSERT INTO bills(username,name,type,amount,date) VALUES('$username','$name','$type','$amount','$date')";
       $result = mysqli_query($connection,$query);
       if (!$result)
        echo "INSERT failed: $query<br>" .      $connection->error . "<br><br>";
      else
      {?>
<script type="text/javascript">
var mail = prompt("Please enter your parent mail!");
       
        window.confirm("Mail sent to "+mail+"!!");
        window.location="mybills.php";
        </script>
    <?php

      }
}

?>
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;overflow: hidden;
 color: white;}

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


td{
	font-size:25px;
}

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
       margin: 150px;
       margin-top: 200px;
         
  
}


</style>
</head>
<body background="images/bill4.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
    <li><a  href="mybills.php">My Bills</a></li>
  <li><a class="active" href="addbills.php">Add Bills</a></li>
  <li><a  href="report.php">Report</a></li>
  <li><a  href="signout.php">Logout</a></li>
  <li><a   href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:50px;:#1abc9c;height:1500px;">

<div class="user" align="center">
<br>
<form action="addbills.php" method="post" >
<table>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Bill Name:
</td>
<td> 
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name">
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Bill Type: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;
<select name="type">
<option >Select</option>
   <option value="electricity">Electricity</option>
  <option value="water">Water</option>
  <option value="phone">Phone</option>
  <option value="food">Food</option> 
  <option value="rent">Rent</option> 
  <option value="other">Other</option> 
</select>
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Value:
</td>
<td> 
&nbsp;&nbsp;&nbsp;&nbsp;<input min="0" type="number" name="amount" placeholder="In Rupees">Rs.
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;Date: 
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date">
</td>
</tr>
<tr>
<td></td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Add Bill"></td>
</tr>

</table>
</form>
<br>
</div>
</div>

</body>
</html>

