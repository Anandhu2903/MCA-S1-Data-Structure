<?php

include('dbconfig.php');

if (isset($_POST['submit'])) {
 

  $email = $_POST['em'];
  $password = $_POST['ps'];
  $conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbschema, "3308");
  if (!$conn) {

    echo "Connection failed!!";

    die();
  }


  $sql = "SELECT * FROM tbluser WHERE email='$email' AND password='$password';";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)<=0)
  {
    echo '<script type="text/javascript">
    window.onload = function () { alert("Login failed."); } 
</script>';

  }
  else{

  
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_row($result);
    session_destroy();
    session_abort();
    session_start();

    $_SESSION['userid'] = $row[0];

    mysqli_close($conn);


    header('location: navbar.php');
  } else {
    //echo "Login failed!! incorrect email or password";
    $loginok = false;

  }

  mysqli_close($conn);
  //die();
}}

?>







<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/pgcss/new.css">
  <link rel="stylesheet" href="/pgcss/front.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    input[type="submit"] {
      width: 100%;
      height: 40px;
      border-radius: 40px;
      background: #fff;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 1em;
      font-weight: 600;

    }

    img[type="mm"] {
      margin-left: 160px;
    }

    div[type="vv"] {
      color: red;
    }
  </style>
  <title></title>
</head>
<script>
  if(window.history.replaceState)
  {
    window.history.replaceState(null,null,window.location.href); 
  }
  </script>
<body>
  <!-- Modal -->


  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="" method="post">
          <h2 type="sp">
            Login
          </h2>
          <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="em" required>
            <label for="">
              Email
            </label>
          </div>
          <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="ps" required>
            <label for="">Password</label>
          </div>
          <br>
          <input type="submit" name="submit" value="Log in">
          <div class="register">
            <p> Don't have a account
              <br>
              <a href="signup.php">
                Signup
              </a>
              <center><a href="adminin.php" style="text-decoration:none;">ADMIN ?</a>
                <center>
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
 
</body>

</html>