<?php 
    session_start();
    if(isset($_SESSION['username'])){
        if($_SESSION['account_type'] == 'Admin'){
          header('Location: administrator.php');
        }
        else{
          header('Location: dashboard.php');
        }
    }
    else{
      session_destroy();
    }

?>

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
    <p class="sign">Sign in</p>
    <form class="form1" method="POST" action="controllers/login_controller.php">
      <?php echo isset($_GET['message']) ? '<p class="title center" style="width: 90%; text-align: center; color: red;margin-top: 0px;">'. $_GET['message'] .'</p>' : '' ?>
      <input class="un " class="center" type="text" name="reg_num" placeholder="Token or Reg # e.g. CEN/01/02/19">
      <input class="pass" class="center" type="password" name="password" placeholder="Password">
      <button type="submit" class="submit">Sign in</button>
      <p class="create_account">Don't have an account yet? <a class="forgot" href="signup.php">Create</a></p>           
    </form>     
  </div>     
</body>
</html>