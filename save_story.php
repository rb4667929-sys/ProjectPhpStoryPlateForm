<?php

include "db.php";

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content'])) {
    $title=mysqli_real_escape_string($conn, $_POST['title']);

    $author=mysqli_real_escape_string($conn, $_POST['author']);

    $content=mysqli_real_escape_string($conn, $_POST['content']);

    $query="insert into stories(title,author,content)
    values('$title','$author','$content')";

    mysqli_query($conn,$query);
}

header("location:index.php");

?>