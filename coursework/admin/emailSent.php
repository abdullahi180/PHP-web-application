<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Successful</title>
       <?php include 'links.php' ?>
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

}

body{
     background-image: url(../img/night.jpg);


     background-size:cover;
     background-attachment: fixed; */
   }


    </style>
  </head>
  <body>
    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="adminHome.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="lostItemsListAdmin.php">Lost Items<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="createUser.php">Create</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="requestAdmin.php">Request item</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-success" href="requestAdmin.php">Back</a>
    </form>
      </div>
    </nav>
 <div class="heading text-center mb-5 text-uppercase text-white">
          EMAIL SENT
        </div>


 
  </body>
</html>
