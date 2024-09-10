<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
<div class="flex-container">
  <div class="content-container">
    <div class="form-container">
      <form action="index2.php" name="myForm" onsubmit="return validateForm()" method="post">
        <h1>
          Login
        </h1>
        <br>
        <br>
        <span class="subtitle">USERNAME:</span>
        <br>
        <input type="text" name="username" value="" required>
        <br>
        <span class="subtitle">PASSWORD:</span>
        <br>
        <input type="password" name="password" value="" required>
        <br><br>
        <input type="submit" value="SUBMIT" class="submit-btn" >
      </form>
    </div>
  </div>
</div>
</body>
</html>
<script>
function validateForm() {
  let x = document.forms["myForm"]["username"].value;
  let y = document.forms["myForm"]["password"].value;
  if (x == "admin" && y=="admin123") {
    alert("Login succesfull...!");
    
  }
  else{
    alert("Login Failed...!");
    return false;
    window.location.replace('login.php');
  }
}
</script>