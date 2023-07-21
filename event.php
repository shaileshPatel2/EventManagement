<?php

$name=$_POST["name"];

$email=$_POST["email"];

$plan=$_POST["plan"];

$message=$_POST["message"];

$number=$_POST["number"];

$address=$_POST["address"]





$con=mysqli_connect("localhost","id20969927_shailesh","Shaiesh@900","id20969927_shaileshdb"); 




$sql="Insert into eventmanagement (name,email,number,plan,message,address) values ('$name','$email','$number','$plan','$message','$address')";



if (mysqli_query($con,$sql))

{

	echo "User Data Successfully Inserted";

}

else

{

	echo "Unable to insert user data";

}





?>