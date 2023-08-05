<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$website=$_POST['website'];
$message=$_POST['message'];

$link=mysqli_connect("localhost", "root", "", "contactus");

if($link==false) {
    die("ERROR: Could Not COnnetct." . mysqli_connect_error());
}

$sql= "INSERT INTO message (name, email, phone, website, message) VALUES ('$name','$email','$phone','$website','$message')";

if(mysqli_query($link,$sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Unsuccessful!" . mysqli_error($list);
}

mysqli_close($link);

?>