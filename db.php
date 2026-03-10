<?php

$conn=mysqli_connect("localhost","root","","storydb");

if(!$conn)
{
die("Database Error: " . mysqli_connect_error());
}

?>