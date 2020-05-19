<!DOCTYPE html>
<html>
<head>
        <meta  http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatibl" content="ie=edge">
        <title>daily</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
</head>
<style>
body {
  background-color: #fffaf0;
}
.headfont {
    font-family: 'Dancing Script', cursive;
}
p{
    font-size:20px;
    font-family: 'kanit', 'Arial', sans-serif;
    color: #7a7876
}
.button {
  background-color: #fdc689;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'kanit', 'Arial', sans-serif;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
}
div {
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 480px;
}
label {
  font-size:20px;
  font-family: 'kanit', 'Arial', sans-serif;
  color: #7a7876
}
</style>
<body>
<?php 
        session_start();
        //$loginID = $_GET['loginID'];
        require ('connect.php');if($_SESSION["loginID"]==""){
            header("Location: login.php");
            }
        else{
             $query ="SELECT *FROM users WHERE loginID='{$_SESSION['loginID']}'";
             $result =mysqli_query($conn,$query);
             $row=mysqli_fetch_assoc($result);
        ?>
  <br>
  <center>
  <img src="https://trello-attachments.s3.amazonaws.com/5e7b049835e5f953513446c8/5eafd38f48cdae11fc13042b/13c3469d91d712fb7a65fefcf8b26a49/changepass.png"
    width="658" height="188">
  </center>
  <br>
  <!-- <form name="chpassword" action="updatepasswoed.php" method="POST"  onSubmit = "return checkPassword(this)"> -->
   <div>
    <label for="pwd1">New Password:</label><br>
    <!-- <input type="text" class="form-control form-control-sm" name = "password" value="<?php echo $row['password'];?>" id="password" placeholder="password"> -->
    <input type = password name = pwd1 size="40" maxlength="20">
    <br><br>
    <label for="pwd2">Confrim Password:</label><br>
    <input type = password name = pwd2 size="40" maxlength="20">
  </div>
  <center><input class="button" type="submit" value="save"></center>

  <script> 
	  function checkPassword(form) { 
	  	pwd1 = form.pwd1.value; 
	  	pwd2 = form.pwd2.value; 

  		if (pwd1 == '') 
			  alert ("Please enter Password"); 
		  else if (pwd2 == '') 
		  	alert ("Please enter confirm password"); 
		  else if (pwd1 != pwd2) { 
		  	alert ("\nPassword did not match: Please try again") 
			  return false; 
			} 
  		else{ 
			//  alert("Password Match: Saved password") 
				return true; 
			}
	} 
  </script>

</body>
</html>