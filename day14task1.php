<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <h1>Login page</h1>
  <h3>login with username or phone number</h3>

  <div class="container">
  <form action="/phpday2/day14task1.php" method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="phonenumber">Phone Number</label>
    <input type="number" class="form-control" name="phonenumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>


<!-- php start here -->
<?php
session_start();
if($_SERVER ["REQUEST_METHOD"] == "POST" && isset($_POST ["username"]) || isset($_POST ["phonenumber"]) &&
isset($_POST["password"])){
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];

    //validate login credentials

    if($username === "alex" && $password === "1234"){
        $_SESSION["username"] = $username;
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Congratulation!</strong> You have successfully login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }elseif($phonenumber === "9999" && $password === "1234"){
        $_SESSION["phonenumber"] = $phonenumber;
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Congratulation!</strong> You have successfully login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Invalid credentials.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

}

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>