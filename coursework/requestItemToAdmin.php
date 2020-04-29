<!DOCTYPE html>
<html lang="en" dir=>
  <head>
    <meta charset="utf-8">
      <title>Request Item</title>
    <style media="screen">
    *{
      margin: 0;
      padding:0;
    }
    .heading{
     width: 100%;
     line-height:65px;
     font-size: 2.5rem;
     font-family: 'Oswald', sans-serif;
     
    }

    body{
      background-image: url(img/night.jpg);


      background-size:cover;
      background-attachment: fixed; */
    }

    </style>
    <?php include 'links.php'?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="regUserHomePage.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="regUserHomePage.php">Home<span class="sr-only"></span></a>
          </li>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="lostItemsListRegUser.php">Lost Items<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="createUser.php">Create</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="requestItemToAdmin.php">Request item</a>
          </li>

        </ul>


      </div>
    </nav>
    <div style="position:relative;top:60px;left:900x;height:500px;" class="container centre-div shadow"  >
      <div class="heading text-center mb-5 text-uppercase text-white">
       REQUEST ITEM

      </div>
    <div style="position:relative;top:50px;max-width:570px" class="container-fluid  p-4  " max-width:1250px>
      <div style="position:relative;height:300px;" class="card">
           <form action="requestSentToAdmin.php" method="post">
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item Id</label>
          <input type="text" name="itemid" value="" class="form-horizontal" required> </br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Username</label>
          <input type="text" name="username" value="" class="form-horizontal" required>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
            <label >Email</label>
            <input type="email" name="email" class="form-horizontal" required>
          </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Reason</label>
          <textarea class="form-control" name="reason" cols="50" rows="3" required>Notes about the item</textarea></br>
        </div>
        </div>
        <div class="form-horizontal">
        <div class="col-md-6 col-md-offset-4">
        <input type="submit" class="btn btn-primary" value="submit" />
        <input type="reset" class="btn btn-primary" />
        </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
