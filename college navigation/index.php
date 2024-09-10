<?php

$connection = mysqli_connect("localhost","root","","college");
$showquery="SELECT * FROM `collegeroom` ";
$showqueryrun = mysqli_query($connection, $showquery);

foreach($showqueryrun as $row){
$roomno=$row['room'];
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
                <form action="show.php" method="post">
                    
                    <label for="myHouse" style="margin-left :20px;">Choose your Room No: </label>
                    <input list="magicHouses" id="myHouse" name="myroom" placeholder="type here..."  style="margin-top :20px; "/>
                    <datalist id="magicHouses">
                        <?php
                        foreach($showqueryrun as $row){
                        ?>
                  <option value="<?php echo $row['room']  ;?>">
                 <?php
                 }?>
                </datalist>
               
                <div class="buttons">
                    <button class="search-btn" onclick="">Search</button>
                </form>
                    <form action="login.php">
                    <button class="edit-btn" onclick="">Edit</button>
                </form>
                </div>
                <h3 style="text-align: center; ">Notices</h3>
                <textarea class="room-select" placeholder="loremepsum
                " cols="55" rows="24" style="resize: none;" name="roomdesc" disabled></textarea>
                
            </div>
            
            <div class="box2" ><h2 style="text-align: center;" >Map</h2></div>
            <div class="box3"><h2 style="text-align: center;" >Directions</h2></div>
        </div>
    </div>
</body>
</html>