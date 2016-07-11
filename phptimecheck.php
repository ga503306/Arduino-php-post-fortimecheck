<?php
mysql_connect('localhost','root',''); 
mysql_select_db("userregisterclassroom");
$sendthis = $_POST["sendthis"];

$sqldate = "SELECT date FROM `registerclassroom` WHERE userid = " . $_POST["sendthis"];
$sqldataout = "SELECT dateout FROM `registerclassroom` WHERE userid = " . $_POST["sendthis"];

$date = mysql_query($sqldate);
$dateout= mysql_query($sqldateout);
$resultdate = mysql_fetch_row($date);
$resultdateout = mysql_fetch_row($dateout);
echo "$resultdate[0]";
echo "$resultdateout[0]";
$date_time =  strtotime($resultdate[0]);
$dateout_time =  strtotime($resultdateout[0]);
echo "<br>";
echo $date_time;
echo "<br>";
echo $dateout_time;
echo "<br>";
$nowtime = time();
echo $nowtime;
if($nowtime-$date_time>0 && $nowtime-$dateout_time<0)
	echo "yes";
else
	echo "no";
?>
