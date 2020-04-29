<?php
session_start();
include 'configur.php';
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}
?>
<!DOCTYPE html>
  <html>
  <head>
    <title>Register</title>

    <?php include 'links.php'?>
    <style>
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
      font-size: 3.0rem;
      font-family: 'Oswald', sans-serif;
     
    }
    body{
      background-image: url(img/reg.jpg);

  color: white;
      background-size:cover;
      background-attachment: fixed; 
    }

    form{
    width: 400px;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="signIn.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="signIn.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="aboutUs.php">About</a>
          </li>

        </ul>




    </form>
      </div>
    </nav>
    <header>
      <div class="container centre-div shadow" style="position:relative;top:300px;left:580px;height:500px">
        <div class="heading text-center mb-5 text-uppercase text-dark">
          REGISTER
        </div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
          <div class="admin-from shadow p-4">
            <form action="registrationBackEnd.php" method="POST">
             <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" value="" class="form-control" required>
           </div>
        <div class="form-group">
                <label>Username</label>
                          
              <input type="text" name="user" class="form-control" pattern="[^\s]+" title="There must be no space between charcaters" required>
</div>
  <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one uppercase and lowercase letter and at least one number, and at least 8 or more characters" required>
              </div>


                            <input type="submit" class="btn btn-success" value="submit" name="submit">
            </form>

          </div>

        </div>
      </div>
    </header>
  </body>
</html>