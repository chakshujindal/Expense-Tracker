<?php
include 'connection.php';
session_start();
if (isset($_POST['submit'])) 
{
$username=$_POST['username'];
$password=$_POST['password'];

$check=0;
        $query="SELECT * FROM user WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection,$query);
        if (!$result) echo "INSERT failed: $query<br>" .      $connection->error . "<br><br>";
        else
        {   

            while($row=mysqli_fetch_row($result))
            {
                if($username==$row[2] && $password==$row[3])
                  {  
                    $name=$row[0];
                    $check=1;
                  } 
            }
        }
        if($check==0)
            echo "Invalid details";
        else
        { $_SESSION['user']= $username;        // passing1 email to session
         
          $_SESSION['SESS_name']=$name;
?> 
        <script type="text/javascript">
        window.location="mybills.php";
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
       height:200px;
       width:350px;
       background-color: hsla(194, 88%, 10%, 0.52);;
       margin-left: 40%;
       margin-top: 200px; 
}

.btn input{
	padding:5px 15px;
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

td{
	    font-size: 20px;
    padding: 10px;
	color:#c1bebe;
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
</style>
</head>
<body background="images/expense10.jpg">
<ul class="a">
  <a class="head"  href="#home"> J&J Daily Expense Tracker System</a>
</ul>
<ul class="b">
  <li><a href="home.php">Home</a></li>
  <li><a  class="active" href="login.php">Login</a></li>
  <li><a href="register.php">Register</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:650px; ">

<div class="user">
<br><br><br>
<form action="login.php" method="post">
<table>
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
<td></td>
<td><div class="btn">
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"></td></div>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>