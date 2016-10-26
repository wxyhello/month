<?php
include("config.php");
$sql="select * from month";
$result=mysql_query($sql);
$row=array();
while($rs=mysql_fetch_assoc($result)){
	$row[]=$rs;
}
echo json_encode($row);
?>