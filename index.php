<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Recipes</title>
</head>
<body>

<!-- Header -->
<?php require "blocks/header.php" ?>

<div class="container mt-5">
  <h3 class="mb-5">Posts</h3>

<div class="d-flex flex-wrap"> 
  <?php
    for($i = 0; $i < 5; $i++):
  ?>
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Header of Post</h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Details</button>
      </div>
    </div>
    <?php endfor; ?>

  </div>


</div>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "recipes";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//$sql = "INSERT INTO users (name, login, password) VALUES ( '$name', '$login', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!-- Footer -->
<?php require "blocks/footer.php" ?>

</body>
</html>



