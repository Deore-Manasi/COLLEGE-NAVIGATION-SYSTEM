

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Navigation</title>
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
                <form action="insert.php" method="POST" enctype="multipart/form-data" >
                    <div>
                <input type="text" class="room-select" placeholder="Enter room no" name="roomno"    required>
                    </div>
                <input type="file" class="room-select" name="roomimage" >

                <textarea class="room-select" placeholder="Enter Description" cols="55" rows="24" style="resize: none;" name="roomdesc" required></textarea>
                <div class="buttons">
                    <button class="search-btn" onclick="" name="addbtn" required>Add</button>
                    
                
            </form>
            <form action="index.php">
                    <button class="edit-btn" onclick="">Home</button>
                </form>
                </div>
            </div>
            
            
            </div>
            
           
        </div>
    </div>
</body>
</html>
