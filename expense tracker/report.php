

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
.table{
    align-content: center;
   align-items: center;

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

td{
	    padding: 10px 60px 20px;
		font-size:26px;
		    color: #fbdbdb;
}
.user{ align-content: center;
       margin-left: 30%;
       margin-top: 200px;
	   background-color:hsla(0, 0%, 0%, 0.46);
	   width:730px;
	  
}

</style>
</head>
<body background="images/bill2.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
    <li><a  href="mybills.php">My Bills</a></li>
  <li><a  href="addbills.php">Add Bills</a></li>
  <li><a  class="active" href="report.php">Report</a></li>
  <li><a  href="signout.php">Logout</a></li>
  <li><a   href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:80px;:#1abc9c;height:1500px;color: white">
<div class ="user">
<br>
<table>
<tr>
<td>NAME</td><td>AMOUNT</td><td>DATE</td>
</tr>
</div>
<?php
include 'connection.php';
session_start();
$type=$_SESSION['type'];
$user=$_SESSION['user'];

$query="SELECT * FROM bills WHERE username='$user' and type='$type'";
        $result = mysqli_query($connection,$query);
        if (!$result) echo "INSERT failed: $query<br>" .      $connection->error . "<br><br>";
        else
        {  
        while($row=mysqli_fetch_row($result))
            {
                ?><tr><td><?php echo $row[1]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td></tr><?php

            } 
        }


?>

</table>
</div>

</body>
</html>

