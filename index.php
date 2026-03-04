<?php
include "db.php";
?>

<html>

<head>

<title>Digital Storytelling</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="header">

<h1>Digital Storytelling Platform</h1>

</div>

<div class="menu">

<a href="index.php">Home</a>

<a href="add_story.php">Add Story</a>

</div>


<div class="container">


<form method="GET">

<input type="text" name="search" placeholder="Search story">

</form>

<br>


<?php

if(isset($_GET['search']))
{

$s=$_GET['search'];

$query="select * from stories where title like '%$s%'";

}
else
{

$query="select * from stories";

}

$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{

?>

<div class="card">

<h2>

<?php echo $row['title']; ?>

</h2>

Author:

<?php echo $row['author']; ?>

<br><br>

<a href="view_story.php?id=<?php echo $row['id']; ?>">

<button>

Read Story

</button>

</a>

</div>

<?php

}

?>

</div>

</body>

</html>