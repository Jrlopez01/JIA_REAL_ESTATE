<?php
  require('header.php');
?>
  
  <section class="middle">
  <form action="signup_process.php" method="post">
        <table style="border: 0px;">
            <tr style="background: #cccccc;">
                <td colspan="2" style="text-align: center;">Sign Up</td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right;">First Name:</td>
                <td><input type="text" name="firstname" size="30" maxlength="50" required /></td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right;">Last Name:</td>
                <td><input type="text" name="lastname" size="30" maxlength="50" required /></td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right;">Email:</td>
                <td><input type="email" name="email" size="30" maxlength="100" required /></td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right;">Password:</td>
                <td><input type="password" name="password" size="30" maxlength="50" required /></td>
            </tr>
            <tr>
                <td style="width: 150px; text-align: right;">Confirm Password:</td>
                <td><input type="password" name="confirm_password" size="30" maxlength="50" required /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Sign Up" /></td>
            </tr>
        </table>
    </form>

      <div class="right-leg">
        <img class="img-contact" src="./img/signup.jpg" alt="people-logo" /> 
    </div>

  </section>
<?php
  require('footer.php');
?>