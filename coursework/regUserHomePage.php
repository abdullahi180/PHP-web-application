
 <?php
 session_start();
 if (!isset($_SESSION['username'])) {
   header('location:login.php');
 }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
       <title>Home</title>

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
      /* background-color: red; */
     }

     body{
       background-image: url(img/land.jpg);
      
       background-size:cover;
       background-attachment: fixed; 
     }



     }

     </style>
   </head>
   <body>
     <!--navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="regUserHomePage.php">FiLo Systems</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

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
         <form class="form-inline my-2 my-lg-0">
      
       <a class="btn btn-success" href="signIn.php">Logout</a>
     </form>
     
     </nav>
    <!-- container -->
     <div style="position:relative;top:300px;left:580px;height:500px;" class="container centre-div"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
        Welcome Back <?php echo $_SESSION['username'] ?>

       </div>

       <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
             <div class="col-md-6 px-0">
                 <h1 class="display-4 font-italic">LOST ITEMS.. </h1>
                 <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.r.</p>
                 <p class="lead mb-0"><a href="createUser.php" class="text-white font-weight-bold">Create an item now..</a></p>
             </div>
         </div>


         <div class="row mb-2">
               <div class="col-md-6">
                   <div class="card flex-md-row mb-4 box h-md-250">
                       <div class="card-body d-flex flex-column align-items-start">

                           <h3 class="mb-0">
                               <a class="text-dark" href="#">YOUR BENEFITS</a>
                           </h3>
                           <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                       </div>

                   </div>
               </div>
               <div class="col-md-6">
                         <div class="card flex-md-row mb-4 box-shadow h-md-250">
                             <div class="card-body d-flex flex-column align-items-start">
                                 <h3 class="mb-0">
                                     <a class="text-dark" href="#">REQUEST ITEMS..</a>
                                 </h3>
                                 <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p class="lead mb-0"><a href="requestItemToAdmin.php" class="text-dark font-weight-bold">Request an item..</a></p>

                             </div>
                         </div>
                     </div>
                 </div>
                 </div>



</div>

   </body>
 </html>
