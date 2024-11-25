<?php
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $date = date('H:i, jS F Y'); 

  require('header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <div class="process-content">
    <?php
      if ($password !== $confirm_password) {
          echo "<p>Error: Passwords do not match!</p>";
          exit();
      }
    
      echo "<h1>Sign-Up Confirmation</h1>";
      echo "<p>Thank you for signing up, " . $firstname . " " . $lastname . "!</p>";
      echo "<p>Email: " . $email . "</p>";
      echo "<p>Sign-up completed at " . $date . "</p>";
    ?>
    </div>
  </body>
</html>
<?php
  require('footer.php');
?>