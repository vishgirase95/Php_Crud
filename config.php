<?php
$conn=mysqli_connect('localhost','root','','student');
if(!$conn){
    die("Cannot connct to database");
}else{
    echo"connected to datbase sucefully";
}

?>