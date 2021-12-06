<?php
$conn = mysqli_connect("localhost","root","","products");

if(!$conn){
    echo "Connection failed" . mysqli_connect_error();
}