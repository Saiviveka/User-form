<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Address = $_POST['Address'];
$Password =($_POST['Password']);
$Gender = $_POST['Gender'];
$Source = $_POST['Source'];
if(isset($_POST['Alerts']))
{
 $_POST['Alerts']=1;
 $subscribe=$_POST['Alerts'];
}
else
{
   $_POST['Alerts']=0;
    $subscribe=$_POST['Alerts'];
}
include_once('Rcheck.php');
$query = "INSERT INTO users(Firstname,Lastname,Email,Mobile,Address,Password,Gender,Source,Alerts) VALUES('$Firstname', '$Lastname', '$Email', '$Mobile', '$Address', '$Password', '$Gender', '$Source', '$subscribe')";
if($conn->query($query)==TRUE)
{
header("location:http://localhost/Newform/Rsuccess.html");
} 
else 
{
echo "Registration Unsuccessful";
}
?>







