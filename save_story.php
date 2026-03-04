<?php

include "db.php";

$title=$_POST['title'];

$author=$_POST['author'];

$content=$_POST['content'];

$query="insert into stories(title,author,content)
values('$title','$author','$content')";

mysqli_query($conn,$query);

header("location:index.php");

?>