<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  position: absolute;
  left: 20px;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04aaaafa;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
    background-color:  #ddd;
  color: #04aaaafa;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("modimg.jpg");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.next {
  background-color: #04aaaafa;
  color: white;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 15px 30px;
}

a:hover {
  background-color: #ddd;
  color: black;
}


</style>
</head>
<body>

    
    <div class="bg-img">
        <a href="index.html" class="next">Back &laquo;</a>


<?php
$host='localhost';
$user='root';
$pass='';
$db='studentdet';

$conn=new mysqli($host,$user,$pass,$db);

$sid=$_GET['s1'];
$sna=$_GET['s2'];
$sma=$_GET['s3'];
$sad=$_GET['s4'];
$sql="update stu_det set studentname='$sna',studentmail='$sma',studentaddress='$sad' where studentid='$sid'";


$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<span style="color:#FFF;text-align:center;"><br> <br>Student data successfully updated!</span>';}
else 
{
    echo 'Error...';
}

$conn->close();
?>


</div>

</body>
</html>