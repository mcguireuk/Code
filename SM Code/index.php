<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Comfortaa|Gothic+A1" rel="stylesheet">
      <style>
         .container{
         padding-left:1%; 
         padding-right:1%;
         box-shadow: 0 4px 8px 0 grey, 0 6px 20px 0 grey;
         }
         p, a {
         font-family: 'Gothic A1', sans-serif;
         }
         .top-image, .middle, .middle-2, .middle-3 {
         background-attachment: fixed;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         text-align: center;
         font-family: 'Comfortaa', cursive;
         }
         .top-image{
         margin-top: 50px;
         background-image: url(photog/top.jpg);
         height: 500px;
         }
         .middle {
         background-image: url(photog/middle.jpg);
         height: 400px;
         }
         .middle-2 {
         background-image: url(photog/20170820_154106.jpg);
         height: 400px;
         }
         .middle-3 {
         background-image: url(photog/middle2.jpg);
         height: 400px;
         }
         h1, h2 {
         display: inline-block;
         background: #fff;
         border-radius: 25px;
         }
         .logo {
         position: sticky;
         margin:auto;
         top: 35%;
         padding:2%;
         background-color: #444;
         opacity: 0.65;
         color: #eee;
         z-index:0;
         }
         h2 {
         font-size: 20px;
         }
         span {
         background: #fd0;
         }
         .footer, .footer a {
         text-align: center;
         color: antiquewhite;
         position: bottom;
         width: 100%;
         background-color: #444;
         height: 100px;
         }
         .footer a:hover{
         color:darkgray;
         }
         .bright{
         width:100%;
         height:auto;
         background-color: #cfd8dc;
         padding: 2%;    
         }
         .dark{
         width:100%;
         height:auto;
         background-color: #aaaaaa;
         padding: 2%;    
         }
         #map {
         margin: auto;
         }
         iframe {
         display: block;
         width: 100%;
         min-height: 300px;
         margin: auto;
         }
         #photogrid {
         padding: 1%;
         }  
         img.pp{
         height: 300px;
         width: 300px;
         object-fit:cover;
         object-position: center;
         }
         padding1% {
         padding: 2%;
         }
         .card-header {
         background-color:darkgray;
         }
         .card-title-price {
         color: cornflowerblue;
         }
         .thumb {
         box-shadow: 0 4px 8px 0 grey, 0 6px 20px 0 grey;
         }
      </style>
   </head>
   <body>
      <script>
          // function to load clicked image into modal larger view
         function setModalImage(id){
         var clickedImage = id.getElementsByTagName("img")[0].getAttribute("src");
         var setImage = document.getElementById("modalImage");
         
         setImage.setAttribute("src", clickedImage);
         
         }
         
      </script>
      <?php 
         include 'navbar.php';
         ?>
      <div class="container">
      <div id="home" class="top-image">
         <nav class='navbar navbar-expand-lg navbar-dark bg-dark justify-content-between'>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#smpnavbar' aria-controls='smpnavbar' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='smpnavbar'>
               <ul class='navbar-nav'>
                  <li class='nav-item'>
                     <a class='nav-link' href='#home'>SMP</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' id='about_link' href='#about'>About</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' id='portfolio_link' href='#portfolio'>Portfolio</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' id='price_link' href='#price'>Price</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' id='contact_link' href='#contact'>Contact</a>
                  </li>
               </ul>
            </div>
         </nav>
         <a id="about"></a>
         <h1 class="logo">Shaun McGuire Photography</h1>
      </div>
      <div class="bright">
         <div class="row jusify-content-center align-items-center">
         	<div class="col-xs-12 col-lg-6 p-3">
                     <div class="card thumb">
               <div class="card-body align-items-center">
                  <img class="img-fluid" src="photog/profile.jpg" max-height="500">
               </div>
            </div>
            </div>
            <div class="col-xs-12 col-lg-6 p-3">
            <div class="card thumb">
               <div class="card-body align-items-center">
               <p><h3 class="bright rounded" align="center">A little about me</h3>
                  I started out in Photography back in 2009. 
                  I've had plenty of practice and experience with children. I have three girls of my own. <br>
                  I specialise in Child photography. What I especially 													 
                  love doing is capturing children at their best. When they are distracted by their surroundings, engrossed in nature or doing what they like. <br>				 	 
                  <br>I don't do white screen as I've never personally liked it. If you want a studio shoot then I'm not for you. <br><br>What I do is different. 	 
                  I talk to you about your life style &amp; your hobbies. What do you love about your family and where is this most likely to happen? That's were 							 
                  we will do the shoot and capture those memories of your favourite little people in their favourite surroundings.</p>
               </div>
            </div>
          </div>
          </div>
          </div>
         <div class="modal fade bg-light" id="photo_large" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content bg-dark" >
                  <div class="modal-body mx-auto">
                     <img class="img-fluid" id="modalImage" src="" style="max-width:100%; max-height:500px;">
                     <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="middle">
            <h1 class="logo">Portfolio</h1>
         </div>
         <div id="portfolio" class="bright">
            <div id="photogrid" class="row jusify-content-center align-items-center">
               <div class="col-md-6 col-lg-4 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm6.staticflickr.com/5520/12487223054_d3a56c47eb_c.jpg"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div id="thumb" class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm4.staticflickr.com/3833/9425878276_a2c1c6ff02_c.jpg"/></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm3.staticflickr.com/2823/12486667785_d2c14bc4fc_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div id="thumb" class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm3.staticflickr.com/2844/9425856116_b6c8c0075c_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm8.staticflickr.com/7285/8739911228_7509884785_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm6.staticflickr.com/5223/5694165923_bb4198c627_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm5.staticflickr.com/4077/5451718897_6fab72601f_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm5.staticflickr.com/4135/4746979975_ee828bace7_c.jpg"></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 d-md-none d-lg-inline py-3">
                  <div class="card border-0 padding1% thumb">
                     <div class="card-body"><a href="" data-toggle="modal" data-target="#photo_large" onclick="setModalImage(this)">
                        <img class="pp img-fluid mx-auto d-block img-thumbnail" src="https://farm5.staticflickr.com/4144/5005445719_d4f7d62b6c_c.jpg"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="middle-2">
            <h1 class="logo">Pricing</h1>
         </div>
         <div id="price" class="bright">
            <div class="card-deck">
               <div class="card text-center thumb">
                  <div class="card-header">
                     Package One
                  </div>
                  <div class="card-body">
                     <h3 class="card-title">Basic</h3>
                     <p class="card-text">1 Hr Shoot on Location<br><br>
                        10 - 9x6 prints<br><br>
                        Additional sizes available at extra cost
                     </p>
                  </div>
                  <div class="card-footer border-0 bg-white">
                     <h1 class="card-title-price">£100</h1>
                  </div>
                  <div class="card-footer">
                     <p>Perfect for tiny toes</p>
                  </div>
               </div>
               <div class="card text-center thumb">
                  <div class="card-header">
                     Package Two
                  </div>
                  <div class="card-body">
                     <h3 class="card-title">Value</h3>
                     <p class="card-text">2 Hr Shoot on Location<br><br>
                        20 prints (choice of small sizes)<br><br>
                        Option for B&amp;W or mixed<br><br>
                        Small PhotoBook of all images<br><br>
                        One Large Print
                     </p>
                  </div>
                  <div class="card-footer border-0 bg-white">
                     <h1 class="card-title-price">£150</h1>
                  </div>
                  <div class="card-footer">
                     <p><b>Most Popular</b> - Ideal for little feet</p>
                  </div>
               </div>
               <div class="card text-center thumb">
                  <div class="card-header">
                     Package Three
                  </div>
                  <div class="card-body">
                     <h3 class="card-title">Premium</h3>
                     <p class="card-text">3 Hr Shoot on Location<br><br>
                        30 prints (choice of small &amp; medium sizes)<br><br>
                        Option for B&amp;W or mixed<br><br>
                        Small PhotoBook of all images<br><br>
                        One Canvas Print
                     </p>
                  </div>
                  <div class="card-footer border-0 bg-white">
                     <h1 class="card-title-price">£200</h1>
                  </div>
                  <div class="card-footer">
                     <p>Suited to big feet</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="middle-3">
            <h1 class="logo">Contact</h1>
         </div>
         <div id="contact" class="bright">
            <div id="map" class="col-sm-12">
               <div class="card thumb">
                  <div class="card-body">
                     <h3 class="bright rounded" align="center">Where I'm Based</h3>
                     <p align="center">I'm able to work anywhere in Cumbria. Pick your favourite place for a shoot and we can do it. <br><br>Make sure you bring some <i class="fas fa-coffee"></i>. Drop me a message below and I'll be in touch soon.</p>
                  </div>
               </div>
               <div class="card-deck py-3">
                  <div class="card thumb">
                     <div class="card-body">
                        <iframe frameborder="0" style="border:0" height="500"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBf9D04I7IPaVZRzhD0s1Wvg2Gfqk1J3b4
                           &q=Whitehaven+UK&zoom=15" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="card thumb">
                     <div class="card-body">
                        <iframe src="contact.php" franeborder="0" height="510" style="border: 0;"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer" >
            <p style="font-size: 2em" ><a href="https://www.facebook.com/shaunmcguirephotography/" target="_blank"><i class="fab fa-facebook"></i></a>  <a href="https://twitter.com/smcguirephoto" target="_blank"><i class="fab fa-twitter-square"></i></a></p>
            <h6>Powered by Bootstrap 4 &amp; Font-Awesome</h6>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>