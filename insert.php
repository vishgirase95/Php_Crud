<?php
include("config.php");
header("Content-Type:application/json");
$body=json_decode(file_get_contents("php://input"),true);
$Student_name=$body['name'];
$Student_gender=$body['gender'];
$Student_age=$body['age'];
$Student_city=$body['city'];
$query="insert into detail(name,gender,age,city) value('{$Student_name}','{$Student_gender}','{$Student_age}','{$Student_city}') ";
$result=mysqli_query($conn,$query) or die(" sql query failed");
if($result){
    echo json_encode(array("messege"=>"insert sucesfully","status"=>true));
    
}else{
    echo json_encode(array("messege"=>"data not found","status"=>false));
}
?> 