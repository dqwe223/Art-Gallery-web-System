<?php
$con = mysqli_connect("localhost","root","","artlock");

if(!$con){
    die("Connection Failed :".mysqli_connect_error());
}
?>