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
	echo ('<center><font color="red">Password incorrect. </font></center>');
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
<form name="sql-data" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
Enter the password :
<input  type="password" name="pass" value ="" maxlength="60" size="30"> 
<input type="submit" value="verify">
</form>
<?php
}
if ($showlogin)  die() ;
?>
<!-- normal continuation of page here.... -->
