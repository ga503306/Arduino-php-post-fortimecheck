<?php
mysql_connect('localhost','root',''); 
mysql_select_db("userregisterclassroom");
$sendthis = $_POST["sendthis"];

$sqldata = "SELECT data FROM `registerclassroom` WHERE userid = " . $_POST["sendthis"];
$sqldataout = "SELECT dataout FROM `registerclassroom` WHERE userid = " . $_POST["sendthis"];


$data = mysql_query($sqldata);
$dataout= mysql_query($sqldataout);

$resultdata = mysql_fetch_row($data);
$resultdataout = mysql_fetch_row($dataout);

echo "$resultdata[0]";
echo "$resultdataout[0]";
$data_time =  strtotime($resultdata[0]);
$dataout_time =  strtotime($resultdataout[0]);


echo "<br>";
echo $data_time;
echo "<br>";
echo $dataout_time;
echo "<br>";
$nowtime = time();
echo $nowtime;

if($nowtime-$data_time>0 && $nowtime-$dataout_time<0)
	echo "yes";
else
	echo "no";
?>