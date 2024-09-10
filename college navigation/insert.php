<?php


$connection = mysqli_connect("localhost","root","","college");
if(isset($_POST['addbtn']))
{
$roomno= $_POST['roomno'];
$image= $_FILES['roomimage']['name'];
$roomdesc= $_POST['roomdesc'];

if(file_exists("maps/".$_FILES['roomimage']['name'])){
   $filename= $_FILES['roomimage']['name'];
   $message = $filename." already exists...!";
   echo "<SCRIPT>  alert('$message')
   window.location.replace('index2.php');
</SCRIPT>";
}
else{
$insertquery = "INSERT INTO collegeroom( room,image, description) VALUES ('$roomno','$image','$roomdesc') ";
$insertqueryrun = mysqli_query($connection, $insertquery);

if($insertqueryrun){
   $message = "Data added successfully";
   
   move_uploaded_file($_FILES["roomimage"]["tmp_name"],"maps/".$_FILES['roomimage']['name']);
   
   

   echo "<SCRIPT>  alert('$message')
       window.location.replace('index2.php');
   </SCRIPT>";
   
}
}

}

?>