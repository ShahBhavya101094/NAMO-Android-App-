<?php
require_once('dbConnect.php');
$sql = "SELECT * FROM std";
$r = mysqli_query($con,$sql);
$result = array();
while($res = mysqli_fetch_array($r)){
array_push($result,array(
"AndroidNames"=>$res['AndroidNames'],
"ImagePath"=>$res['ImagePath']
)
);
}
echo json_encode(array("result"=>$result));
mysqli_close($con);
?>