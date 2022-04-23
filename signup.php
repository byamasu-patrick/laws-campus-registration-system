<!DOCTYPE htmtl>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign center">Sign Up</p>
    <form class="form1" action="controllers/user_controller.php" method="POST">
      <?php echo isset($_GET['message']) ? '<p class="title center" style="width: 90%; text-align: center; color: red;margin-top: 0px;">'. $_GET['message'] .'</p>' : '' ?>
      <input class="un " type="text" class="center" name="reg_num" placeholder="Token or Reg # e.g. (CEN/01/02/19)">
      <input class="un " type="text" class="center" name="username" placeholder="e.g. Patrick Paul">
      <input class="pass" type="password" class="center" name="password" placeholder="Password">
      <div class="center " style="margin-bottom: 20px; color: rgb(38, 50, 56);font-weight: 700;">
          <input type="hidden" name="account_type" value="Admin"/>
          <input type="radio" name="account_type" value="Student"/> Student
      </div>
      <button type="submit" class="submit">Create Account</button>
      <p class="create_account">Have an account yet? <a class="forgot" href="index.php">Sign In</a></p>
    </form>
                
    </div>
     
</body>

</html>