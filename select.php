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
    
    if ($result=mysqli_query($conn,"SELECT Firstname,Lastname,Email,Mobile,Address,Password,Gender,Source,Alerts FROM users WHERE Email='$Email'"))
    {
    while ($row=mysqli_fetch_row($result))
    {

        $Firstname = $row[0];
        $Lastname = $row[1];
        $Email=$row[2];
        $Mobile=$row[3];
        $Address = $row[4];
        $Password =$row[5];
        $Gender = $row[6];
        $Source = $row[7];
          }

   } }
    
else{
   
echo "Email is not registered with us...!!!!";
exit();
}
}}

?>

<html>
 <head>
     <script type="text/javascript" src="jquery-3.3.1.js"></script>
     <script type="text/javascript" src="bootstrap.js"></script>
     <script type="text/javascript" src="Angular.js"></script>
     <link rel="stylesheet" href="Bootstrap.css"/>
    
         
    
<body>
         
    </div>
         <div class = "container">
 <form action="select.php" method="post" class="form-horizontal" id="rform">
 <fieldset>
    <legend> Click Update button to edit your details </legend>
     
        <BR>
          <BR>
        <button type="button" name="update" id="update" class="btn btn-success">Update your details</button>
       <script>
  document.getElementById("update").onclick = function() {
  window.location.href = "http://localhost/Newform/editing.html";
};
              </script>
    <div class="form-group">
        <label for="Firstname" class="col-md-2 control-label">Firstname</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="Firstname" id="Firstname" value="<?php echo $Firstname;?>">
      </div>
    </div>
    <div class="form-group">
      <label for="Lastname" class="col-md-2 control-label">Lastname</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="Lastname" id="Lastname"  value="<?php echo $Lastname;?>">
      </div>
    </div>
      <div class="form-group">
      <label for="Email" class="col-md-2 control-label">Email</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="Email" id="Email"  value="<?php echo $Email;?>">
      </div>
    </div>
       <div class="form-group">
      <label for="Mobile" class="col-md-2 control-label">Mobile</label>
      <div class="col-md-6">
        <input type="number" class="form-control" name="Mobile" id="Mobile"  value="<?php echo $Mobile;?>">
      </div>
    </div>
      <div class="form-group">
      <label for="Address" class="col-md-2 control-label">Address</label>
      <div class="col-md-6">
        <textarea type="text" class="form-control" rows="3" name="Address" id="Address"  placeholder="<?php echo $Address;?>"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>

          <span id="msg"> </span>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-2">
                 </div>
    </div>
            
       
  </fieldset>
</form>
</div>
</body>
     </html>