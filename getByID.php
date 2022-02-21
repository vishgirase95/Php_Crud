<?php
include("config.php");
header("Content-Type:application/json");
$body=json_decode(file_get_contents("php://input"),true);
// $Student_ID=$body['SID'];
$Student_ID=isset($_GET["ID"]) ? $_GET["ID"] : die();
$query="select * from detail where ID like '%{$Student_ID}%'";
$result=mysqli_query($conn,$query) or die(" sql query failed");

if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array("messege"=>"data not found","status"=>false));
}
?> 