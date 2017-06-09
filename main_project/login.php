<!doctype html>
<html>

<head>

<title>Doctor's Home</title>

<style>
.top{	
		margin-top:-10px;
		margin-left:50px;
		Background-color:red;
		text-align:center;
		font-size:70px;
		height:100px;
		width:1180px;
	}
.login{
	
	Background-color:#9DF9F9;
	font-size:15px;
	height: 200px;
    width: 200px;
	margin-left: 550px;
	margin-top:50px;
	padding-left:10px;
	padding-top:10px;
	
	border-width:1px;
	border-style:solid;
	border-radius:5px;
}

.button{
	
	margin-left:130px;
	font-size:30px;
}

.forgot{
	
	margin-left:70px;
}

.wrong{
	
	margin-left:550px;
	color:red;
}

.eyepos{
	margin-left:150px;
	margin-top:-106px;
}

button{
	color:white;
	
}

img:hover {
	cursor:hand;
	
}

input[type=password] {
	width: 145px;
	padding: 1px 25px 1px 0px;
}


</style>

</head>


<body>


<section class="top">
<img src="backback.jpg" alt="back">
</section>
<br>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "((107))ami";
$dbname = "medical_blog_system";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected suasdasdsdccessfully";
?>
<!--$conn = null;-->


<section class="login">
<form action="" method="post">
  Username:<br>
  <input type="text" name="username">
  <br><br>
  Password:<br>
  <input type="password" name="password">
  <br><br>
  <section class="forgot"><a href="http://www.google.com">forgot password?</a></section>
  <br>
  <section class="button"><input type="submit" name="blogin" value="Login"/></section>
  <section class="eyepos">
  <!--button type="button" id="eye"   color="red" onclick="if(password.type=='text')password.type='password'; else password.type='text';"-->
            <img src="eye.gif" height="10px" width="20px" alt="eye" onclick="if(password.type=='text')password.type='password'; else password.type='text';"/>
         </button>
		 </section>
</form>
</section>



<?php
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['blogin'])){
			$name= $_REQUEST['username'];
			$pass= $_REQUEST['password'];
			
			$sql = "SELECT idPerson, Username, Password FROM Person";
			$result = $conn->query($sql);
			
			while($row = $result->fetch_assoc()) {
			//	echo "id: " . $row["idPerson"]. " - Name: " . $row["Username"]. " " . $row["Password"]. "<br>";
				if($row["Username"]==$name && $row["Password"]==$pass){
					//echo "Match found".$row["idPerson"]."<br>";
					$updsql = "UPDATE loggedin SET idLoggedin=".$row["idPerson"]." where idLoggedin>=0";
					$conn->query($updsql);
					header('Location: blog_feed.php');
				}
			}
			echo "<section class=\"wrong\">Username/Password is incorrect</section>";
	}	
?>


</body>

</html>