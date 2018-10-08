 <html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
    
   
<style>

.container-fluid {
background-color: #cfcfcf;

}
    
   .thumb {
   box-shadow: 0 4px 8px 0 grey, 0 6px 20px 0 grey;
   }
.portfolio {
        height: auto;
        background-color: #cfcfcf;

}
.cover {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url("Capture.PNG");
text-align: center;
width: 100%;
height: 400px;
padding-bottom: 5%;
}



.logo-h1{
  position: sticky;
    left: 0;
    top: 50%;
    margin: auto;
    width: 60%;
    background-color: #9e9e9e;
    text-align: center;
    font-size: 4vmin;
        color: #000; 
	border: 2px;
	outline-style: solid;
	outline-color: #9e9e9e;
	outline-offset: 3px;
	border-radius: 25px;
}
.footer a {
color: #000;
}

.footer {
background-color: #9e9e9e;
width: 100%;
padding: 45px 0;
color: #000;
text-align: center;
}

.clients{
    height: auto;
    background-color: #9e9e9e;
}

.skills {
height: auto;
background-color: #cfcfcf;
}
.contact {
    padding: 2%;
    height: auto;
    padding: 2%;
    background-color: #cfcfcf;
}
iframe {
    display: block;
    width: 100%;
    min-height: 300px;
    margin: auto;
    }
    
    #map {
        margin: auto;
    }
      


</style>
<?php

include 'navbar.php';

?>

<body onload="loadLogo()">

<div class="container-fluid">

    <div class="cover thumb">
		<p class="logo-h1 rounded" id="logo"><span class="">&nbsp;</span></p>
		
<script>
var logoHeading = document.getElementById("logo");
var logoText = "function onload() {document.write('Welcome to SM Code')};";
var text = "";
var length = logoText.length;
var x = 0;

 // delay function to load each char at a random time delay.   
function randDelay(){
return Math.floor(Math.random() * 250);
}

// function load text title as if typed live. 
function loadLogo(){
	var timerId = setTimeout(function changeText() {
  if (x <= length){
		text += logoText.charAt(x);
		logoHeading.innerHTML = text + "|";
		x++;
	} 
  timerId = setTimeout(changeText, randDelay()); // (*)
}, randDelay());
	}



</script>
	</div>
	<div class="row skills align-content-center justify-content-around pt-3">
		<div class="card-deck px-3">
		<div class="card text-center py-2 px-4 thumb">
			<i class="fab fa-html5 fa-7x" style="color:red;"></i>
			<p>HTML5 is the new standard. It's now faster and cheaper than ever before. It's modern. It allows you to do what has been impossible in previous versions. It's mobile friendly. It's what you want and need!  </p>
		</div>
		<div class="card text-center py-2 px-4 thumb">
			<i class="fab fa-css3 fa-7x" style="color:blue;"></i>
			<p>CSS3 is the language of style. It allows for easy styling of the elements within your site using code and not images. This ensures your pages look great on Mobile, Tablet or Desktop. </p>	
		</div>
		</div>
		</div>
		<div class="row skills align-content-center justify-content-around py-md-3 py-0">
		<div class="card-deck px-3">
		<div class="card text-center py-2 px-4 thumb">
			<i class="fab fa-php fa-7x" style="color:purple;"></i>
			<p>PHP makes the background magic happen. It can talk to your database and serve up all info needed to make you site run smoothly and quickly. PHP is powerful and easy to install on your server and easy to integrate with JavaScript & HTML. </p>
		</div>
		<div class="card text-center py-2 px-4 thumb">
			<i class="fab fa-js fa-7x" style="color:yellow;"></i>	
			<p>JavaScript allows for user-responsive content on your sites. This allows for the ability for your 
			   content to react to user input. Click, Hovers and Buttons will respond by displaying new content 
			   or updating the previously displayed response. </p>
		</div>
		</div>
		</div>
				
	</div>
	 <div class="row clients text-center align-content-center justify-content-around thumb my-3">
		    <div class="col-12 pt-1">
		    	<h2>Portfolio</h2>
          </div>
        	
    </div>
	<div class="portfolio">
        <div class="card-deck p-3">
		<div class="card thumb">
			<div class="card-body">
				<img class="img-fluid" src="../portfolio-snips/smp-large.PNG">
			</div>
		</div>
		<div class="card thumb">
			<div class="card-body">
				<img class="img-fluid" src="../portfolio-snips/cv-large.PNG">
			</div>
		</div>
		<div class="card thumb">
			<div class="card-body">
				<img class="img-fluid" src="../portfolio-snips/quake-large.PNG">
			</div>
		</div>
        </div>
	</div>
    <div class="row clients text-center align-content-center justify-content-around thumb my-3 pt-1">
		    <div class="col-md-3">
		    	<h2>5+ Projects</h2>
          </div>
        <div class="col-md-3">
	    		<h2>50+ Pages</h2>
        </div >
        <div class="col-md-3">
	    		<h2>3 Clients </h2>
        </div >
        <div class="col-md-3">
	    		<h2>100% Satisfied</h2>
        </div>	
    </div>
	<div class="contact">
	<div id="map" class="card thumb p-3"><h3 class="bright" align="center">Where I'm Based</h3><p align="center">I'm a freelance Web & Android developer, based in west cumbria. <br> I'm available for projects large or small and won't stop until it's complete and you are 100% satisfied.<br> If you have a project in mind then drop me a message below and I'll be in touch soon.</p>
            <div class="card-deck p-3">
                <div class="card">
                    <div class="card-body">
                        <iframe frameborder="0" style="border:0" height="500"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBf9D04I7IPaVZRzhD0s1Wvg2Gfqk1J3b4
    &q=Whitehaven+UK&zoom=15" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <iframe src="contact.php" frameborder="0" height="510" style="border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    
	</div>
	<div class="col footer justify-content-center thumb">
					<a style="padding:1%;" href="http://www.facebook.com/mcguireuk" title="Facebook Profile"><i class="fab fa-facebook-square" ></i></a>
					<a style="padding:1%;" href="http://www.plus.google.com/111915849862868081737" title="Google+ Profile"><i class="fab fa-google-plus"></i></a>
					
					<a style="padding:1%;" href="https://twitter.com/smcguirephoto"><i class="fab fa-twitter-square" title="Twitter Profile"></i></a>
				
			<p>Powered by CSS, Bootstrap 4 & Font Awesome</p>
	</div>
</div>
</body>
</html>
