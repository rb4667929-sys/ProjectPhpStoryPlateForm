<?php

include "db.php";

$id=$_GET['id'];

$query="select * from stories where id=$id";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

?>

<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>


<div class="header">

<h1>

<?php echo $row['title']; ?>

</h1>

</div>


<div class="container">

<div class="card">

<h3>

Author:

<?php echo $row['author']; ?>

</h3>

<br>

<?php echo $row['content']; ?>

</div>

</div>


</body>

</html>