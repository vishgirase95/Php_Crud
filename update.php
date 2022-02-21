<?php
include("config.php");
header("Content-Type:application/json");
$body=json_decode(file_get_contents("php://input"),true);
$Student_ID=$body['ID'];
$Student_name=$body['name'];
$Student_gender=$body['gender'];
$Student_age=$body['age'];
$Student_city=$body['city'];
$query="update detail set name='{$Student_name}',gender='{$Student_gender}',age='{$Student_age}',city='{$Student_city}' where id='{$Student_ID}'";
$result=mysqli_query($conn,$query) or die(" sql query failed");
if($result){
    echo json_encode(array("messege"=>"Updated sucesfully","status"=>true));
    
}else{
    echo json_encode(array("messege"=>"data not found","status"=>false));
}
?> 