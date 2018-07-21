<?php
include 'connect.php'; // 
$bang = access_token; // 
$a = mysql_result(mysql_query("SELECT COUNT(*) FROM Asu "), 0);
echo"<center><font color='red'>Currently Has $a Working Member </font></center>";
$lethetuan = mysql_query("SELECT * FROM Asu ");
if($lethetuan){
while($tuandz = mysql_fetch_array($lethetuan))
{
$token = $tuandz[access_token];
$idfb = $tuandz[user_id];
$name= $tuandz[name];
echo '<center><a href ="https://facebook.com/'.$idfb.'"target="_blank"> '.$name.'</a></center>';
echo '</br>';
$tokenao = file_get_contents('https://graph.facebook.com/1493880700696692/likes?method=post&access_token='.$token);
if($tokenao != true)
{
mysql_query("DELETE FROM Asu WHERE User_id='$idfb'");}
}

}




?>