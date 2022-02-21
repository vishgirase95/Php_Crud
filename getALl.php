<?php
include("config.php");
header("Content-Type:application/json");
$query= "select * from detail";
$result=mysqli_query($conn,$query) or die("query failed");

if($result){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array("messege"=>"no record found","status"=>"failed"));
}
?>