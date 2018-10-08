<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Comfortaa|Gothic+A1" rel="stylesheet">
      <link href="league-gothic-master/webfonts/stylesheet.css" rel="stylesheet">
     <link rel="stylesheet" href="styles.css?v=<?=time();?>"> 
   </head>
   <body class="black">
   <?php
   include "../navbar.php";
   ?>
   <?php
        include 'top-nav.php';
        ?>
       <div class="container-fluid">
            <div class="col-12 header text-center">Biker-Meet</div>
           <div class="container">
               <div class="card-deck">
                <div class="card white text-center border-secondary shadow p-3">
                    <a href="local-rides.php">
                    <div class="card-body-large"><i class="fas fa-motorcycle"></i>
                        <div class="card-text-large">Look here for all ride outs, You'll find events like Charity rides</div>
                    </div></a>
                  </div>
                <div class="white text-center card border-secondary shadow p-3">
                    <a href="local-meets.php">
                    <div class="card-body-large"><i class="far fa-comments"></i>
                        <div class="card-text-large">Look here for all your biker cafe's, Meets & Bike nights</div>
                        </div></a>
                      </div>
                  <div class="white text-center card border-secondary shadow p-3">
                      <a href="submission.php">
                    <div class="card-body-large"><i class="far fa-plus-square"></i>
                        <div class="card-text-large">Add your ride or Meet</div>
                    </div></a>
                      </div>
            </div>
           </div>
           <div class="footer text-center my-5">Biker-Meets accepts no liabilty for the information enclosed. The information contained within is not owed by Biker-meets. Information is provided by the public for the sole use of the public. You personal will not be used by biker-meets for other purpose than displaying your search results. We do not keep you personal details unless your are submitting ride/meet data. 
                </div>
       </div>
                            
   </body>
</html>