
 <!DOCTYPE html>
 <html >
   <head>
     <title>About Us</title>
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
      /* background-color: red; */
    }

    body{
      /* background-image: url(img/jewerlyy.jpg); */
      background-size:cover;
      background-attachment: fixed;
      color:black;

      background-image: url(img/city.jpg);

      background-attachment: fixed;
    }


     span {
       content: "\2022";
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
             <a class="nav-link" href="signIn.php">Home<span class="sr-only"></span></a>
           </li>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="aboutUs.php">About <span class="sr-only">(current)</span></a>
               </li>




       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="lostItemsGuestPage.php">Lost Items<span class="sr-only">(current)</span></a>
           </li>

           <li class="nav-item active">
             <a class="nav-link" href="contactUs.php">Contact us <span class="sr-only">(current)</span></a>
           </li>
         </ul>
       </div>
     </nav>

     <div style="position:relative;top:300px;left:580px;height:500px;" class="container centre-div shadow"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
        ABOUT US
       </div>


     <div class="row mb-2">
         <div class="col-md-6">
             <div class="card flex-md-row mb-4 box-shadow h-md-250">
                 <div class="card-body d-flex flex-column align-items-start">

                     <h3 class="mb-0">
                         <a class="text-dark" href="#">WHAT WE DO..</a>
                     </h3>
                     <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <a href="#">Continue reading</a>
                 </div>

             </div>
         </div>
         <div class="col-md-6">
             <div class="card flex-md-row mb-4 box-shadow h-md-250">
                 <div class="card-body d-flex flex-column align-items-start">
                     <h3 class="mb-0">
                         <a class="text-dark" href="#">HOW WE CAN HELP YOU..</a>
                     </h3>
                     <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <a href="#">Continue reading</a>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="card flex-md-row mb-4 box-shadow h-md-250">
                 <div class="card-body d-flex flex-column align-items-start">
                     <h3 class="mb-0">
                         <a class="text-dark" href="#">HOW YOU CAN GET INVOLVED..</a>
                     </h3>
                     <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <a href="#">Continue reading</a>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="card flex-md-row mb-4 box-shadow h-md-250">
                 <div class="card-body d-flex flex-column align-items-start">
                     <h3 class="mb-0">
                         <a class="text-dark" href="#">BENEFITS OF BECOMING A REGISTERED USER..</a>
                     </h3>
                     <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <a href="#">Continue reading</a>
                 </div>
             </div>
         </div>
     </div>
   </body>
 </html>
