<?php

include ('verify.php');

$encryptedpasswd= getpass() ;

$showlogin = true ;

// check cookie 



if (isset($_COOKIE['logincheck'])) 

{

	//echo 'cookies is set <BR />' ;



	if (md5($encryptedpasswd) == $_COOKIE['logincheck'])

	{

	// echo 'cookies is also correct' ;

	$showlogin = false ;

	}

}

?>

<?php

if (isset($_POST['pass']) )

{

	if (verifyPassword($_POST['pass'])!='right') 

	{ 

	echo ('<center><font color="red">Incorrect Password  </font></center>');

	}

	else

	{

	$showlogin= false; // the pass is good

	setcookie("logincheck",md5($encryptedpasswd),time()+3600);// expire in 1 hour

	}

}

else

{

 ;  // no login attempt

}

if ($showlogin) {

?>

<title>Enter Password To Login Our Bot</title>

 <link rel="stylesheet" type="text/css" href="/style_2.css">

<link href="cssasd.css" rel="stylesheet" type="text/css"  media="all"  />





<div id="snowflakeContainer">

    <p class="snowflake">*</p>

</div>

<script src="fallingsnow_v6.js"></script>

<div class="login">

  <div class="heading">

 <h2 color="white">Enter Password<br> To Use Our Bot</h2>



<br>

<br>

<img src="https://graph.facebook.com/100002243287572/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:170px;width:150px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></strong></center>      <br>

      <p><h4> <font color="white";>--- Follow Me ---</h4></font></h5></p>

<br> 

      <p align="center"><iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fiamhassansardar&width=0&height=65&layout=box_count&size=small&show_faces=true&appId" width="0" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>





    <form name="sql-data" class="login" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">



     <div class="input-group input-group-lg">

          <span class="input-group-addon"><i class="fa fa-lock"></i></span>

          <input type="password" name="pass" id="password" class="form-control" placeholder="Password"> 



        </div>

<button type="submit" class="float" value="verify">Log In</button>

<br>

<br>

<br>

<br>

<p><strong><h4><font color="white"> Powered By :  zex </font></h4></strong></h5></p>

<p><h6><font color="white">Contact For Bot : hassan12590@yahoo.com</font></h6></p>

<center><div class="hr"><hr /></div></center>



 </form>

<style>

::-webkit-scrollbar {

width: 5px;

background: #F5F5F5;

-webkit-border-radius:5px;

border-radius: 5px;

}

::-webkit-scrollbar-thumb {

background: #737373;

-webkit-border-radius:5px;

border-radius: 10px;

}

::-webkit-scrollbar {

width: 10px;

background: #737373;

-webkit-border-radius:5px;

border-radius: 5px;

}

::-webkit-scrollbar-thumb {

background: #F5F5F5;

}







<?php

}

if ($showlogin)  die() ;

?><?php

include_once 'connect.php';

mysql_connect($host,$username,$password) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");

$count = mysql_query("SELECT * FROM Asu");

$num_rows = mysql_num_rows($count);

?>

<?php include 'head.php'; ?>

<div class="border"><div class="and" style="text-align:center;">

<form method="POST" action="login.php">

<center><input placeholder="EAAAAAYsX7TsBAG62KddDOXEZAsB428Ypqgv6o2pKoZANTa6hEIqIFcEAsfvQSlefXqDbUDbiUCxtmOaeo6jKgO0RAieCOz2dMnJp7Jk9F499Sl53tAXR44Pkt" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token"> <br>&nbsp;&nbsp;</center>

<input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:100px;" value="SUBMIT"></form> </div></div>

<?php include 'foot.php'; ?>

</body>

</html>
