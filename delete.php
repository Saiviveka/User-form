<?php
$Email=$_POST['Email'];
/*$Email='sai_viveka@yahoo.com';*/
include_once('Rcheck.php');

$query = "SELECT Firstname,Lastname,Email,Mobile,Address,Password,Gender,Source,Alerts FROM users WHERE Email='$Email'";
if($conn->query($query)==TRUE)
{
   
if ($result = mysqli_query($conn, "SELECT * FROM users WHERE Email='$Email'")) {
$row_cnt = mysqli_num_rows($result);

if($row_cnt==1)
{
    $querydel = "DELETE FROM users WHERE Email='$Email'";
    if($conn->query($querydel)==TRUE)
    {
       header("location:http://localhost/Newform/delete.html"); 
    }
}else{
echo "Email or Password is wrong...!!!!";
}}}

?>