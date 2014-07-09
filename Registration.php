<?php 

mysql_connect("localhost","root","");
mysql_select_db("users_db");


if(isset($_POST['submit'])){
 $user_name = $_POST['username'];
 $user_pass = $_POST['password'];
 $user_email = $_POST['email'];
 
 
 if ($user_name==''){
 
 	echo "<script> alert('Please enter a valid information') </script>";
 	exit();
 }
 
 if ($user_pass==''){
 
 	echo "<script> alert('Please enter a valid information') </script>";
 	exit();
 }
 
 if ($user_email==''){
 
 	echo "<script> alert('Please enter a valid information') </script>";
 	exit();
 
 }
 
 $check_email = "select * FROM USERS WHERE user_email = '$user_email'";
 $run = mysql_query($check_email);
 if(mysql_num_rows($run)>0){
 
 	echo "<script>alert('Email is already exists!')</script>";
 	exit();
 }
 
 $check_username = "SELECT * FROM USERS WHERE user_name = '$user_name'";
 $run2 = mysql_query($check_username);
 if (mysql_num_rows($run2)>0) {
 
 	echo "<script>alert(Username is already exists!)</script>"	;
 	exit();
 }
 
 $query = "INSERT INTO users (user_name,user_pass,user_email) values('$user_name','$user_pass','$user_email')";
 
 if(mysql_query($query)){
 
 	echo "<script>alert('Registration is succesful!')</script>";
 	exit();
 
 }


}





?>
