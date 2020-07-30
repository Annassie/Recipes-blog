<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Contact us</title>
</head>
<body>

  <!-- Header -->
  <?php require "../blocks/header.php" ?>

  <div class="container mt-5">
    <form action="register.php" method="post">
    <br>
    <button type="submit" name="send" class="btn btn-success">Back</button>

      <?php 
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        // Checking if inserted values are correct
        if(mb_strlen($name) < 1 || mb_strlen($name) > 50) {
          echo "Unacceptable length of login!";
          exit();
        }  else if(mb_strlen($login) < 4 || mb_strlen($login) > 90) {
          echo "Unacceptable length of name!";
          exit();
        }  else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 10) {
          echo "Unacceptable length of password, it must be from 5 to 10 signs!";
          exit();
        }

        echo "You created a new user successfully!";

        /* passwords' HASHing */
        $pass = md5($password."asjhad2345");
        // $pass = password_hash($pass, PASSWORD_DEFAULT);

        // Credintials for mysql db
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $db = "recipes";

        // Creating connection to mysql 
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        /* Connecting to database with 'new mysqli' function ('host', 'user name', 'password', 'db name')*/
        //$mysql = new mysqli('localhost', 'root', 'root', 'recipes');

        /* Inserting data into db-table */
        // $mysql->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES('$name', '$login', '$password')");

        // $sql = "INSERT INTO users (name, login, password) VALUES ('John', 'John1234', '123456')";
        $sql = "INSERT INTO users (name, login, password) VALUES ( '$name', '$login', '$pass')";


        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
       
        /* Close mysql connection */
        $conn->close();

        /* If message was sending successfully, it returns to main page */
        header('Location: login.php');

      ?>

  </form>
  </div>

  <!-- Footer -->
  <?php require "../blocks/footer.php" ?>

</body>
</html>



