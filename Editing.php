<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Address = $_POST['Address'];
include_once('Rcheck.php');
$query = "UPDATE users SET Firstname ='$Firstname',Lastname='$Lastname',Email='$Email',Mobile='$Mobile',Address='$Address' where Email= '$Email'";
if($conn->query($query)==TRUE)
{
header("location:http://localhost/Newform/successful.html");
} 
else 
{
echo "Change Unsuccessful";
}
?>