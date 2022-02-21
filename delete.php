<?php
include("config.php");
header("Content-Type:application/json");
$body=json_decode(file_get_contents("php://input"),true);
$Student_ID=$body['SID'];
$query="delete from detail where ID='{$Student_ID}'";
$result=mysqli_query($conn,$query);
echo gettype($result);
if($result){
    echo json_encode(array("messege"=>"data deleted","status"=>true));

}else{
    echo json_encode(array("messege"=>"data not found","status"=>false));
}
?> 