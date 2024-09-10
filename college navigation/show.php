<?php
$room=$_POST['myroom'];
$connection = mysqli_connect("localhost","root","","college");
$showquery="SELECT * FROM `collegeroom` WHERE room='".$room."'";
$showqueryrun = mysqli_query($connection, $showquery);

foreach($showqueryrun as $row){
$map= $row['image'];
$desc= $row['description'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Nav</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <div class="title">
        <div class="img1"><img src="Picture5.png" height="70px" width="90px"></div>
        <div class="t1">
            <marquee class="marquee" behavior="scroll" direction="left">
                SNJB's Late Sau.Kantabai Bhavarlalji Jain College Of Engineering, Chandwad
            </marquee>
        </div>
        <div class="img2"><img src="coe.png" height="80px" width="90px"></div>
    </div>
    <div>
        <div class="box">
            <div class="box1">
                <form action="index.php">
                    
                    <label for="myHouse" style="margin-left :20px;">Directions for Room No: </label>
                    <input type="text" id="myHouse" name="myHouse" value="<?php echo"$room" ?>" class="room-select " disabled style="margin-top :20px; "/>
                   
                <div class="buttons">
                    <button class="search-btn" onclick="">Home</button>
                    
                    
                </form>
                </div>
            </div>
            
            <div class="box2"><h2 style="text-align: center;" >Map</h2>
            <div style="padding-top : 30px;">
            <a href="<?php echo"maps/".$map?>"  target="_blank">
            <img src="<?php echo"maps/".$map?>" alt="Map" width="350" height="420" style="vertical-align:middle; padding-left:50px;">
            </a>
                 </div>
                 </div>
            <div class="box3"><h2 style="text-align: center;" >Directions</h2>
                <div style="padding-top : 30px;">
                <textarea class="room-select" placeholder="<?php echo"$desc" ?>"  cols="55" rows="25" style="resize: none;" name="roomdesc"></textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>