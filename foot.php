<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<title>ZEX MENTION BOT</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="/css/style.css" type="text/css" />
<link rel="stylesheet" href="style0.css" media="all,handheld"/>
<link rel="shortcut icon" href="" />
<meta content='www.facebook.com/iamhassansardar' name='author'/>
<meta content='general' name='rating'/>
<meta content='Pakistan' name='geo.placename'/>
<meta content='google' name='generator'/>
<meta content='noodp, noydir, index, follow, all' name='robots'/>
<meta http-equiv="Cache-control" content="public" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="googlebot" content="index, follow" />
<meta name="revisit-after" content="2 days" />
<meta name="language" content="EN" />
<meta name="author" content="ZEX MENTION BOT" />
<meta name="copyright" content="Copyright © 2018 Mention bot" />
<meta name="document-classification" content="Input Your Token and Get Lots of Bot Facebook It's Free ^_^ ! Please share with your friend's ;)" />
<meta property="og:url" content="http://zexbot.ga"/>    
<meta property="og:title" content="Mention Bot"/> 
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.shaw.ca/uploadedImages/Bots/bot-facebook.jpg"/>
<meta property="og:description" content="Input Your Token and Get Lots of Bot Facebook It's Free ^_^ ! Please share with your friend's ;)" />
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
</div>
</center>
</style>
</head>
<body>
<div style="text-align:center">
<div class="reg">
</div>
<br>
<center>
<strong><font color="white"size="5">&nbsp; Bot Users :</font> <font color="737373"size="5"><?php echo $num_rows;?></font></strong></center>
</div>
</body>

<?php
if($_GET['show'] == '') {
$show = 10;
}else {
$show = $_GET['show'];
}

$babygay = mysql_query ("SELECT name, COUNT(name) FROM Asu");
$robersgay = mysql_fetch_array($babygay);
$gay =$robersgay['COUNT(name)']; 
?>
<div>
</div>
<center>
<div id="header">
<h1 style="color: white;">Users Information</h1>
<div class="tbl-header">
<table cellpadding="20" cellspacing="20" border="0">

<thead>

<tr>
<th>Profile</th>
<th>Names</th>
<th>Userid</th>
</tr>
</thead>
</table>
</div>

<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<tr>
						<?
                                             
						$res = mysql_query("SELECT * FROM Asu ORDER BY `id` DESC LIMIT 10");
								while ($post = mysql_fetch_array($res)){
								echo'

<tr><td><img width="80" height="80" src="https://graph.facebook.com/'.$post['user_id'].'/picture?type=large" alt="image" style="border-radius: 100%; border: 2px solid white;"></a></td>
								<td><a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><b><font style="color: grey;">'.$post['name'].'</font></b></a></td>
								<td><a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><b><font style="color: Grey;">'.$post['user_id'].'</font></b></a></td>



</tr>								</div></tr>
</tbody>
</div>
';								}
								echo'</tbody></table>';
								?>
						</tbody>
					</table>
			</div>
			</div>
		</div>



</div>
</div>
</div>



</div>
</div>
						
<div id="content">
</div>
<br>
<br>
<br>
<br>
<center>
<marquee behavior="scroll" direction="left" scrollamount="10" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:white;" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered&nbsp;&nbsp; By : Hassan&nbsp;&nbsp;Sardar</font></strong></center></marquee>