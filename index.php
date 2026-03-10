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

if(isset($_GET['search']) && !empty($_GET['search']))
{

$s=mysqli_real_escape_string($conn, $_GET['search']);

$query="select * from stories where title like '%$s%'";

}
else
{

$query="select * from stories";

}

$result=mysqli_query($conn,$query);

if ($result && mysqli_num_rows($result) > 0) {
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

} else {
    echo "<p style='text-align:center;'>No stories found.</p>";
}

?>

</div>

</body>

</html>