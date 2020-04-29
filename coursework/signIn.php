
<!DOCTYPE html>
  <html>
  <head>
    <title>Sign in</title>

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
     /* background-color: red; */
   }
   body{
     background-image: url(img/NY.jpg);
     background-size:cover;
     background-attachment: fixed;
     color:white;

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

          <li class="nav-item active">
            <a class="nav-link" href="lostItemsGuestPage.php">Lost Items</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="contactUs.php">Contact us <span class="sr-only">(current)</span></a>
          </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
                 <div class="" style="position:relative;left:700px;">
                   <a class="btn btn-success" href="register.php">Register</a>
                 </div>
               </form>



             <form class="form-inline my-2 my-lg-0" >
               <div class="" style="position:relative;left:200px;">
                    <a class="btn btn-success" href="./admin/admin.php">Admin</a>
               </div>
             </form>
      </div>
    </nav>
    <header>
      <div class="container centre-div shadow"  >
        <div class="heading text-center mb-5 text-uppercase text-white">
          LOGIN
        </div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
          <div class="admin-from shadow p-4">
            <form action="validateUser.php" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user1" value="" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass1" value="" class="form-control">
              </div>
              <input type="submit" class="btn btn-success" value="Login" name="submit">
            </form>

          </div>

        </div>
      </div>
    </header>
  </body>
</html>
