<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="header">

<h1>Add Story</h1>

</div>


<div class="container">

<div class="card">

<form action="save_story.php" method="POST">

Title

<input type="text" name="title" required>

<br><br>

Author

<input type="text" name="author" required>

<br><br>

Story

<textarea name="content" rows="10" required>

</textarea>

<br><br>

<button>

Save Story

</button>

</form>

</div>

</div>

</body>

</html>