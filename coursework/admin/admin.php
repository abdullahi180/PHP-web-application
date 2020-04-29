<?php
session_start();
include 'dataConnec.php';
if ($con) {

}else {
  echo "connection not success";
}
?>

<!DOCTYPE html>
  <html>
  <head>
    <title>Admin Login</title>
    <?php include 'links.php'?>

    <style media="screen">
    *{
      margin: 0;
      padding:0;
    }
    .centre-div{
      position: absolute;
      top: 50%;
      left: 50%;
      transform:translate(-50%,-50%);
    }
    .heading{
     width: 100%;
     line-height:65px;
     font-size: 2.5rem;
     font-family: 'Oswald', sans-serif;
     /* background-color: Black; */
    }

    body{
      background-image: url(../img/adminwal.jpg);

color: white;
      background-size:cover;
      background-attachment: fixed; */
    }



    }

    </style>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../signIn.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../signIn.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../aboutUs.php">About</a>
          </li>

        </ul>
        </div>
    </nav>
    <header>
      <div class="container centre-div shadow"  >
        <div class="heading text-center mb-5 text-uppercase text-white">
          ADMIN
        </div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
          <div class="admin-from shadow p-4">
            <form action="comfirmLoginDetails.php" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" value="" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" value="" class="form-control">
              </div>
              <input type="submit" class="btn btn-success" value="Login" name="submit">
            </form>

          </div>

        </div>
      </div>
    </header>
  </body>
</html>
