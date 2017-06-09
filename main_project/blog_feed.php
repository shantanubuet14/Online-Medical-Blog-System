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
	
	.searchOptionBox{
		margin-top:-23px;
		float:left;
		margin-left:1010px;
		
	}
	.searchIconBox{
		margin-top:-20px;
		float:left;
		margin-left:1015px;
		
	}
	
	input[type=text] {
		width: 130px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		font-size: 14px;
		
		background-color: white;
		background-image: url('search.png');
		background-position: 1px 1px; 
		background-size: 14px 14px;
		background-repeat: no-repeat;
		
		padding: 0px 10px 0px 20px;
		-webkit-transition: width 0.4s ease-in-out;
		transition: width 0.4s ease-in-out;
	}
	input[type=text]:focus {
		width: 80%;
	}
		
	.writePost{
			margin-left:10px;
		
	}
		
	textarea{
		height:50px;
		width:820px;		
	}
	
	.allPosts{
		Background-color:	#ADD8E6;
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
	<section class=\"searchOptionBox\"> 
	 <input type=\"text\" name=\"search\" placeholder=\"Search...\">
	</section>
	
	<br>
	"; 
	
	/*<section class=\"searchIconBox\"> 
	<a href=\"http://www.google.com?goaccount\">
	<img src=\"search.png\" alt=\"sss\" height=\"15px\" width=\"15px\"></a>
	
	</section>
	<a href=\"http://www.google.com?goaccount\">
	<img src=\"search.png\" alt=\"sss\" height=\"15px\" width=\"15px\"></a>
	
	*/
	
	if(isset($_GET['out'])){
			$updsql = "UPDATE loggedin SET idLoggedin=0 where idLoggedin>=0";
			$conn->query($updsql);
			echo("<script>location.href ='login.php';</script>");
	}
	
	if(isset($_GET['goaccount'])){
		
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
 
	
	
	
	////////////////--------posts seletions from database
	
	$sql = "SELECT idPerson,idPost,Title,Description,Date,Likes,Comments,Time FROM Post";
	$result = $conn->query($sql);
	
	echo "<section class=\"allPosts\"><br>";
	while($res=$result->fetch_assoc()){
		$rows[]=$res;
	}
	$rows = array_reverse($rows ,true);
	foreach($rows as $row){
	//while($row = $result->fetch_assoc($rs)){
		$idWritter=$row["idPerson"];
		$idPost=$row["idPost"];
		$totalLikes=$row["Likes"];
		$totalComments=$row["Comments"];
		$postDetail=$row["Description"];
		$sql_writter = "SELECT First_Name, Last_Name FROM Person where idPerson=".$idWritter;
		$result_writter = $conn->query($sql_writter);
		$row_writter=$result_writter->fetch_assoc();
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
		$tt=new DateTime($row['Time']);
		echo "<section class=\"postTotal\">
			 <section class=\"postTitle\"><a href=\"?aa=".$idPost."\">".$row["Title"]."</a></section><br>
			<section class=\"postWritter\">".$namefWritter." ".$namelWritter."<br>".$row["Date"]."<br>".$tt->format('h:i A')."</section><br>
			<section class=\"postDescription\">".substr($row["Description"],0,250)."[...]</section>";		
		echo	"<section class=\"readmore\"><a href=\"?aa=".$idPost."\">read more...</a></section><br>";
			
		echo "</section><br>";
		
		if($ck==0){
			echo "<section class=\"likes\">
			".$totalLikes."</section>";
		}
		else {
			echo "<section class=\"liked\">
			".$totalLikes."</section>";
			
		}
		echo "<section class=\"likeIconIcon\"><a href=\"?change=".$idPost."&cnttt=".$totalLikes."\"><img src=\"".$llString."\" alt=\"likee\"  height=\"30px\" width=\"30px\" id=\"lala".$idPost."\"></a></section>
		
		<section class=\"comments\">
		".$totalComments."</section>";
		
		
		echo "<section class=\"commentIconIcon\"><a href=\"?aa=".$idPost."\"><img src=\"comment.ico\" alt=\"likee\"  height=\"30px\" width=\"30px\"></a></section>
		<br><br><br>";
		
		if(isset($_GET['aa'])){
			$sqlpost="UPDATE currentpost set idCurrentPost=".$_GET['aa']." where idCurrentPost >=0";
			$conn->query($sqlpost);
			echo $_GET['aa'];
			echo("<script>location.href ='aPost.php';</script>");
		}
		//echo "lala".$idPost;
		
		
		//
	}
	echo "</section >";
	
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
					//$delsql="insert into liked".$idlogged." values (".$_GET['change'].")";
								
				    //echo $delsql;
					$conn->query($delsql);
					$ok=0;
					$totalLikes=$_GET['cnttt'];
					$totalLikes=$totalLikes-1;
					$delsql="update post set Likes=".$totalLikes." where idPost=".$_GET['change'];
					$conn->query($delsql);
					
					
					
					echo("<script>location.href ='blog_feed.php';</script>");
					break;
				//	echo "changed";
				
				}
			}
			if($ok==1){
				$delsql="insert into liked".$idlogged." values (".$_GET['change'].")";
				echo $delsql;
				$conn->query($delsql);
				$totalLikes=$_GET['cnttt'];
				$totalLikes=$totalLikes+1;
				$delsql="update post set Likes=".$totalLikes." where idPost=".$_GET['change'];
				$conn->query($delsql);
				
			}
			echo("<script>location.href ='blog_feed.php';</script>");	
		/*	echo "<script>					  
					  var img = document.getElementById(\"lala\"+".$_GET['change'].");
					  img.src =\"".$llString."\"; 
				  </script>
			";
			*/
			
	}
	

	

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
<br>
	
 
 
 
</body>

</html>