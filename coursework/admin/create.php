<!DOCTYPE html>
<html lang="en" dir=>
  <head>
    <meta charset="utf-8">
    <title>Create</title>
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
     background-image: url(../img/night.jpg);


     background-size:cover;
     background-attachment: fixed;
   }
    </style>
    <?php include 'links.php'?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="adminHome.php">FiLo Systems</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="adminHome.php">Home<span class="sr-only"></span></a>
          </li>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="lostItemsListAdmin.php">Lost Items<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="create.php">Create</a>
          </li>
                   <li class="nav-item active">
            <a class="nav-link" href="requestAdmin.php">Requests</a>
          </li>
<li class="nav-item active">
             <a class="nav-link" href="registredUsers.php">List Of Registred Users</a>
           </li>

        </ul>


      </div>
    </nav>
    <div style="position:relative;top:60px;left:800x;height:500px;" class="container centre-div"  >
      <div class="heading text-center mb-5 text-uppercase text-white">
       CREATE ITEM

      </div>
    <div style="position:relative;top:0px;max-width:690px" class="container-fluid  p-4  " max-width:1250px>
      <div class="card">
            <form action="populateTableData.php" method="post" enctype="multipart/form-data">
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item Color</label>
          <input type="text" name="color" value="" class="form-horizontal" required> </br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item type</label>
          <select name="category" >
<           <option class="form-horizontal"  value="pet">Pet</option>
            <option  class="form-horizontal" value="phone">Phone</option>
            <option  class="form-horizontal" value="jewellery"> jewellery</option>
          </select>
        </div>
      </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Location</label>
          <input type="text" name="location" value="" class="form-horizontal" required>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
            <label >Date</label>
            <input type="date" name="date" placeholder="Date" required/>
          </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Description</label>
          <textarea class="form-control" name="description" cols="50" rows="3" required>Notes about the item</textarea></br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Image</label>
          <input type="file" name="file" id="file" required/>
        </div>
        <div class="col-md-6 col-md-offset-4">
        <input type="submit" class="btn btn-primary" value="submit"; />
        <input type="reset" class="btn btn-primary" />
        </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
