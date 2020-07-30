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
    <form action="login.php" method="post">
    <br>
    <button type="submit" name="send" class="btn btn-success">Back</button>

      <?php 
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        /* Compare HASH passwords */
        $pass = md5($pass."asjhad2345");

        // Credintials for mysql db
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $db = "recipes";

        // Creating connection to mysql 
        $conn = new mysqli($servername, $username, $password, $db);

        /* Getting data from db */
        // $result = $conn->query("SELECT * FROM users WHERE `login` = '$login' AND `password` = '$pass'");

        $sql = "SELECT login, password FROM users";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          -- // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "Login: " . $row["login"]. " <br>";
          }
        } else {
          echo "0 results";
        }
        
        // /* Converting user data from object to array */
        // $user = $result->fetch_assoc();
        // if(count($user) == 0) {
        //   echo "The user does not found";
        //   exit();
        // }

        // Cookie setting by element key 'name* -> (name of cookie, value: $user['name'], time: 1h = 3600s, and it is valid in all pages of site -> '/')
        setcookie('user', $row['name'], time() + 3600, '/')
        
        $conn->close();

        /* If message was sending successfully, it returns to main page */
        // header('Location: ../index.php');
          // header('Location: login.php');
          header('Location: /recipes/contact/contact.php');


      ?>
      
  </form>
  </div>

  <!-- Footer -->
  <?php require "../blocks/footer.php" ?>

</body>
</html>



