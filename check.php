<!DOCTYPE html>
<html>
<body>
<?php
echo $_SERVER['SERVER_NAME'];?> server name <br />
<?php
echo $_SERVER['SERVER_ADDR']; 
?>server ip<br/>  
<?php

########ip
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ip=$_SERVER['HTTP_CLIENT_IP'];
	echo "CLIENT : $ip";
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	echo "FORWARDED :$ip";
}else{
	$ip=$_SERVER['REMOTE_ADDR'];
	echo " 瀏覽當前頁的client ip 位址 :$ip";
}
 
#$browser = get_browser();
#print_r($browser);

?><br />

<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser); 
?>
<br />


</body>
</html>
