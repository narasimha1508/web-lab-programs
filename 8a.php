<?php
$onemm=60*60*24*30+time();
SetCookie('Visit',date("d/m/y-g:i:s"),$onemm);
print "cookie is set!!!";
if(isSet($_COOKIE['Visit']))
{
$Visit_val=$_COOKIE['Visit'];
}
else
{
echo "This is not the desired use of cookies";
}
echo "last visited on".$Visit_val;
?>

