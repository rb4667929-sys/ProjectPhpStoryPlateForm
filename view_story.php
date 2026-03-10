<?php

include "db.php";

if(isset($_GET['id'])) {
    $id=intval($_GET['id']);

    $query="select * from stories where id=$id";

    $result=mysqli_query($conn,$query);

    if($result && mysqli_num_rows($result) > 0) {
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

<?php
    } else {
        echo "<div style='text-align:center; padding: 50px;'><h2>Story not found.</h2><a href='index.php'><button>Go Back</button></a></div>";
    }
} else {
    echo "<div style='text-align:center; padding: 50px;'><h2>Invalid Request.</h2><a href='index.php'><button>Go Back</button></a></div>";
}
?>