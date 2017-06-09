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
	
	
	.account{
		margin-left:10px;
	}
	.notifications{
		margin-left:10px;
		
	}
	.logout{
		margin-left:10px;
	}
	.postTitle {
		text-align:center;
		font-size:30px;
		
		
		
	}
	
	a{
		text-decoration:none;
		color:#013F24;
	}
	
	a:hover{
		text-decoration:underline;
		color:red;
	}
	
	
	
	.postDescription{
		margin-left:10px;
		width:800px;
	}
	
	.postWritter{
		margin-left:10px;
		font-size:15px;
	}
	
	.postTotal{
		Background-color:#E0FFFF;
		margin-left:6px;
		width:820px;
		border-style:solid;
	}
	
	.menu{
		Background-color:	#E0FFFF;
		float:left;
		margin-left:50px;
		height:24px;
		width:1178px;
		border-style:solid;
		border-width: 1px;
	}
	.currentMenu{
		font-size:20px;
		text-align:center;
		Background-color:	#C0C0C0;
		margin-left:50px;
		height:30px;
		width:1178px;
		border-style:solid;
		border-width: 1px;
	}
	
	.quick{
		margin-top:-22px;
		float:left;
		margin-left:300px;
		
	}
	
	.doctors{
		margin-top:-22px;
		float:left;
		margin-left:470px;
		

		}
	
	.hospital{
		margin-top:-22px;
		float:left;
		margin-left:570px;
		

	}
	
	.blog{
		margin-top:-22px;
		float:left;
		margin-left:670px;
		

		}
	
	.encyclopedia{
		margin-top:-22px;
		float:left;
		margin-left:750px;
	

		}
	
	.askQuestion{
		margin-top:-22px;
		float:left;
		margin-left:880px;
		
	}
	.writePost{
			margin-left:10px;
		
	}
		
	
	
	.allPosts{
		Background-color: #ADD8E6;
		float:left;
		width:840px;
		
		border-style: double;
	}
	.readmore a{
		font-color: red;
		margin-left:700px;
	}

	
	.accountBox{
		margin-left:50px;
		Background-color:#E0FFFF;
		width:170px;
		float:left;
		border-style:solid;	
		border-width:2px;
	}
	
	.rightBox{
		
		margin-left:1070px;
		Background-color:#E0FFFF;
		
		width:156px;
		border-width:2px;
		border-style:solid;
		text-align:center;
	}
	
	.postBox{
		
		margin-left:8px;
		
	}
	</style>
	
</head>

<body>


<?php

	
	//////////////-----------connectiong to server
	
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
	
	
	
	///////////////----------collecting loggedin ID and name
	
	$sql = "SELECT idLoggedin FROM loggedin";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$idlogged=$row["idLoggedin"];
	$sql = "SELECT idPerson,First_Name,Last_Name FROM Person";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		if($row["idPerson"]==$idlogged){$fname=$row["First_Name"];$lname=$row["Last_Name"];}
	}
	echo"<section class=\"top\"><img src=\"backback.jpg\" alt=\"back\"></section>";
	
	echo"<section class=\"menu\"></section>
	<section class=\"quick\"><a href=\"http://www.google.com?goaccount\">Quick Appointment</a></section>
	<section class=\"doctors\"><a href=\"http://www.google.com?goaccount\">Doctors</a></section>
	<section class=\"hospital\"><a href=\"http://www.google.com?goaccount\">Hospitals</a></section> 
	<section class=\"blog\"><a href=\"blog_feed.php\">Blog</a> </section> 
	<section class=\"encyclopedia\"><a href=\"http://www.google.com?goaccount\">Encyclopedia</a></section> 
	<section class=\"askQuestion\"><a href=\"http://www.google.com?goaccount\">Ask Anything</a> </section>
	<br>
	"; 
	if(isset($_GET['out'])){
			$updsql = "UPDATE loggedin SET idLoggedin=0 where idLoggedin>=0";
			$conn->query($updsql);
			echo("<script>location.href ='login.php';</script>");
	}
	
	if(isset($_GET['goaccount'])){
		
	}
	
	
		echo "	<section class=\"currentMenu\">Post a blog</section>
	
	<section class=\"accountBox\">
		<br>
		<section class=\"account\"><h3><a href=\"http://www.google.com?goaccount\">".$fname." ".$lname."</a></h3></section>
		<br>
		<section class=\"notifications\"><a href=\"http://www.google.com?goaccount?other\">Notifications</a></section>
		<section class=\"notifications\"><a href=\"http://www.google.com?goaccount?other\">Appointments</a></section>
		<section class=\"notifications\"><a href=\"http://www.google.com?goaccount?other\">Messages</a></section>
		<br>
		<section class=\"logout\"><a href=\"?out\">Logout</a></section><br>
		</section>
	";
 	
echo "<section class=\"allPosts\"><br>		
	<section class=\"postBox\">
	<form action=\"\" method=\"post\">
	  <input type=\"hidden\" name=\"username\" value=\"Write comments ...\">
	  Title<br>
	  <textarea name=\"postTitle\" rows=\"1\" cols=\"114\" placeholder=\"Title here ...\"></textarea>
	  <br>Description<br>
	  <textarea name=\"postDescription\" rows=\"21\" cols=\"114\" placeholder=\"Description here ...\"></textarea>
	  <section class=\"button\"><input type=\"submit\" name=\"blogin\" value=\"Post\"/></section>
	</form>
	</section>
<br>";
if(isset($_POST["blogin"])){
		
	if($_REQUEST["postTitle"] && $_REQUEST["postDescription"]){
		
		$postSql="select count(*)total from post";
		$postResult=$conn->query($postSql);
		$postRow=$postResult->fetch_assoc();
		$totalPost=$postRow["total"]+1;
		
		$postSql= "insert into post values(".$totalPost.",".$idlogged.",'".$_REQUEST["postTitle"]."','".$_REQUEST["postDescription"]."','".date("Y-m-d")."',0,0,now())";
		$conn->query($postSql);
		//echo $postSql;
		
		echo("<script>location.href ='blog_feed.php';</script>");
		exit;
	}
	else {
		
		echo "<section style=\"color:red\">Must fill everthing.</section>";
	}
}

echo "</section >";

		
		
		
		

	
		
?>

<section class="rightBox">
	<h2><a href="writePost.php">Write Something</a></h2>
	<br>
	<h3 style="text-align:center">Top posts</h3>
	
<?php

$sql = "SELECT idPost,Title FROM post order by Likes desc";
	$result = $conn->query($sql);
	
	$cnt=0;
	while($cnt<5){
		$row = $result->fetch_assoc();
		echo "<h4><a href=\"?topFunction=".$row["idPost"]."\">".$row["Title"]."</a></h4>";
		$cnt=$cnt+1;
		if(isset($_GET['topFunction'])){
			$sqlpost="UPDATE currentpost set idCurrentPost=".$_GET['topFunction']." where idCurrentPost >=0";
			$conn->query($sqlpost);
			echo("<script>location.href ='aPost.php';</script>");
		}
		
	}
	
	
	
	

?>	
	
	
</section>
 
 	
	

</body>

</html>