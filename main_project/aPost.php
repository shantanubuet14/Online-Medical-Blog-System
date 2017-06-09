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
	.commentPersonnn{
		float:left;
		margin-left:10px;
		width:100px;
	}
	.commentDescription{
		margin-left:10px;
		width:710px;
	}
	
	
	.postWritter{
		margin-left:10px;
		font-size:15px;
	}
	
	.postTotal{
		Background-color:#E0FFFF;
		margin-left:10px;
		width:820px;
		border-style:solid;
		border-width:1px;
		border-radius:5px;
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
	
	.login{
		margin-left:10px;
		
	}
	
	textarea{
		height:50px;
		width:820px;		
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
	
	.allPosts{
		Background-color: #ADD8E6;
		float:left;
		width:840px;
		border-style: double;
	}
	
	.commentBox{
		margin-left:10px;
		width:820px;
		Background-color: #6495ED;
		border-style:solid;
		border-width:1px;
		border-radius:5px;
	}
	
	.commentBoxTotal{
	
		Background-color:#A9A9A9;
		margin-top:10px;
		width:840px;
		border-style: double;
		float:left;
	}
	
	.middleBox{
		float:left;
		width:840px;
	}
	
	.likes{
		margin-left:20px;
		float:left;
	}
	
	.liked{
		margin-left:20px;
		float:left;
		color:blue;
		font-weight:bold;
	}
	
	.likeIconIcon{
		float:left;
		margin-left:10px;
		margin-top:-10px;
		
	}
	
	.comments{
		margin-left:20px;
		float:left;
	}
	
	.commentIconIcon{
		float:left;
		margin-left:10px;
		margin-top:-9px;
		
	}
	

	
</style>

</head>


<body>


<section class="top">
<img src="backback.jpg" alt="back">
</section>


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


<?php



/*

		
	
	

*/



echo"<section class=\"menu\"></section>
	<section class=\"quick\"><a href=\"http://www.google.com?goaccount\">Quick Appointment</a></section>
	<section class=\"doctors\"><a href=\"http://www.google.com?goaccount\">Doctors</a></section>
	<section class=\"hospital\"><a href=\"http://www.google.com?goaccount\">Hospitals</a></section> 
	<section class=\"blog\"><a href=\"blog_feed.php\">Blog</a> </section> 
	<section class=\"encyclopedia\"><a href=\"http://www.google.com?goaccount\">Encyclopedia</a></section> 
	<section class=\"askQuestion\"><a href=\"http://www.google.com?goaccount\">Ask Anything</a> </section>
	<br>
	"; 

	$logsql = "SELECT idLoggedin FROM loggedin";
		$logresult = $conn->query($logsql);
		$logrow = $logresult->fetch_assoc();
		$idlogged=$logrow["idLoggedin"];
		//echo "haha".$idlogged;
		$sql = "SELECT idPerson,First_Name,Last_Name FROM Person";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			if($row["idPerson"]==$idlogged){$fname=$row["First_Name"];$lname=$row["Last_Name"];}
		}
		
		
	echo "	<section class=\"currentMenu\">Blog</section>
	
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
	if(isset($_GET['out'])){
			$updsql = "UPDATE loggedin SET idLoggedin=0 where idLoggedin>=0";
			$conn->query($updsql);
			echo("<script>location.href ='login.php';</script>");
	}
	
	
	
	
	$sql = "SELECT idCurrentPost FROM currentpost";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	//echo $row["idCurrentPost"];
	$idPost=$row["idCurrentPost"];
	$sql = "SELECT idPerson,Title,Description,Date,Likes,Comments FROM post where idPost=".$idPost;
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$totalLikes=$row["Likes"];
	$totalComments=$row["Comments"];
	
	$idWritter=$row["idPerson"];
	//echo "<br>".$idWritter;
	$sql_writter = "SELECT First_Name, Last_Name FROM person where idPerson=".$idWritter;
	$resultWritter = $conn->query($sql_writter);
	$row_writter=$resultWritter->fetch_assoc();
	$namefWritter=$row_writter["First_Name"];
	$namelWritter=$row_writter["Last_Name"];
	
	
		$ck=0;
		$llString="like.png";
		$llsql="select * from liked".$idlogged;
		$llresult=$conn->query($llsql);
		while($llrow=$llresult->fetch_assoc()){
			if($idPost==$llrow["idLiked"]){
				$llString="liked.gif";
				$ck=1;
			}
		}
		
		echo "<section class=\"middleBox\"><section class=\"allPosts\"><br><section class=\"postTotal\">
		<section class=\"postTitle\"><a href=\"?aa=".$idPost."\">".$row["Title"]."</a></section><br>
		<section class=\"postWritter\">".$namefWritter." ".$namelWritter."<br>".$row["Date"]."</section><br>
		<section class=\"postDescription\">".$row["Description"]."</section>
		
		<br></section><br>";
		
		if($ck==0){
			echo "<section class=\"likes\">
			".$totalLikes."</section>";
		}
		else {
			echo "<section class=\"liked\">
			".$totalLikes."</section>";
			
		}
		echo "<section class=\"likeIconIcon\"><a href=\"?change=".$idPost."\"><img src=\"".$llString."\" alt=\"likee\"  height=\"30px\" width=\"30px\"></a></section>
		<section class=\"comments\">
		".$totalComments."</section>
		<section class=\"commentIconIcon\"><img src=\"comment.ico\" alt=\"likee\"  height=\"30px\" width=\"30px\"></section>
		<br>
		
		
		<br></section>";

	if(isset($_GET['change'])){
			
			//echo "ole ole";
			//$llString="liked.gif";
			$ok=1;
			$llsql="select * from liked".$idlogged;
			$llresult=$conn->query($llsql);
			while($llrow=$llresult->fetch_assoc()){
				if($_GET['change']==$llrow["idLiked"]){
					//$llString="like.png";
					$delsql="delete from liked".$idlogged." where idLiked=".$_GET['change'];
					
					$conn->query($delsql);
					
					$totalLikes=$totalLikes-1;
					$delsql="update post set Likes=".$totalLikes." where idPost=".$_GET['change'];
					$conn->query($delsql);
					
					
					$ok=0;
					echo("<script>location.href ='aPost.php';</script>");
					break;
				//	echo "changed";
				
				}
			}
			if($ok==1){
				$delsql="insert into liked".$idlogged." values (".$_GET['change'].")";
				
				$conn->query($delsql);
				
				$totalLikes=$totalLikes+1;
				$delsql="update post set Likes=".$totalLikes." where idPost=".$_GET['change'];
				$conn->query($delsql);
					
				
			}
			echo("<script>location.href ='aPost.php';</script>");	
		/*	echo "<script>					  
					  var img = document.getElementById(\"lala\"+".$_GET['change'].");
					  img.src =\"".$llString."\"; 
				  </script>
			";
			*/
			
	}
	


	echo "<section class=\"commentBoxTotal\"><br>
	<section class=\"login\">
	<form action=\"\" method=\"post\">
	  <input type=\"hidden\" name=\"username\" value=\"Write comments ...\">
	  <textarea name=\"message\" placeholder=\"Write comments ...\"></textarea>
	  <section class=\"button\"><input type=\"submit\" name=\"blogin\" value=\"Comment\"/></section>
	</form>
	</section>
	<br>";
	
	
	


	if(isset($_POST["message"])){	
		
		$mmmm= "INSERT INTO comment VALUES(".$idPost.",".$idlogged.",'".$_POST["message"]."','".date("Y-m-d")."',NOW())";
		$wow=$conn->query($mmmm);
		$totalComments=$totalComments+1;
		$mmmm= "UPDATE post set Comments=".$totalComments." where idPost=".$idPost;
		$wow=$conn->query($mmmm);
		//echo $mmmm;
		echo("<script>location.href ='aPost.php';</script>");
		
	}
	
	$commentSql="select idComment,idPerson,Description,Date,Time from comment where idComment=".$idPost;
	$commentResult= $conn->query($commentSql);
	
	
	while($commentRow=$commentResult->fetch_assoc()){
		
		$commentPersonSql="SELECT First_Name, Last_Name FROM Person where idPerson=".$commentRow["idPerson"];
		$commentResultPerson= $conn->query($commentPersonSql);
		$commentRowPerson=$commentResultPerson->fetch_assoc();
		$tt=new DateTime($commentRow['Time']);
		echo"<section class=\"commentBox\">";
		echo "<section class=\"commentPersonnn\">".$commentRowPerson["First_Name"]."<br>".$commentRow['Date']."<br>".$tt->format('h:i A')."</section>";
		
		echo "<section class=\"commentDescription\">".$commentRow["Description"]."</section><br><br></section><br>";
		
	}
	echo"</section></section>";
	

	
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