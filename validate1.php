<?php
include_once('Rcheck.php');
$Email=$_POST['Email'];
$Password =$_POST['Password'];
/*$Email = 'sai_viveka@yahoo.com';
$Password='369851';*/
include_once('Rcheck.php');
$query ="SELECT Email FROM users WHERE Email='$Email' AND Password = '$Password'";
if($conn->query($query)==TRUE)
{
    if ($result = mysqli_query($conn, "SELECT * FROM users WHERE Email='$Email' AND Password = '$Password'")) {


    $row_cnt = mysqli_num_rows($result);

if($row_cnt==1)
{
header("location:http://localhost/Newform/account.html");
}else{
echo "Email or Password is wrong...!!!!";
}}}

?>

 