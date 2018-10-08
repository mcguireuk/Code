<html>
    

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
    <style>
    .top-form{
    position: relative;
    top: 50px;
    height: auto;
    width: 90%;
    }
    </style>
<body>
<?php include 'navbar.php'; ?>

<div class="container-fluid">
<div class="top-form mx-auto">

    <div class="navbar justify-content-center pt-3">
		
			<form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		                
                 		   <label for="limit">Max results: </label><input type="text" class="form-control col-sm-12 col-lg mb-2 ml-1" name="limit" placeholder="1-100">
               			   <label for="minmag" class="ml-2">Minimum Magnitude: </label><input type="text" class="form-control col-sm-12 col-lg mb-2 ml-1" name="minmag" placeholder="0-10">
                 		   <div class="form-check-inline ml-2">Sort by:  
 				 	<input class="form-check-input m-1" type="radio" name="sortby" value="time"  id="time"><label class="form-check-label">Date</label>
 					<input class="form-check-input m-1" type="radio" name="sortby" value="magnitude" id="size"><label class="form-check-label">Size</label>
				  </div> 
 					
                   		   <button type="submit" class="btn btn-dark col-sm-12 col-lg ml-1" name="submit" value="submit">Submit</button>
                		
          		</form>
    
    </div>
    </div>
    <div class="row mt-5 mt-lg-4 p-1 justify-content-center" style="padding: 1%;">
    
    <?php
    // setup blank variables.
$result = $limit = $minmag = $sortby = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $limit = test_input($_POST["limit"]);
        // limit results to within API spec's -- further detail available https://earthquake.usgs.gov/fdsnws/event/1/
        if($limit > 100) {
        $limit= 100;
        } else if($limit < 1) {
        $limit = 1;
        }
        
        $minmag = test_input($_POST["minmag"]);
        //limit magnitude to valid values
        if($minmag < 0) {
        $minmag = 0; 
        } else if($minmag > 10) {
        $minmag = 10;
        }
        $sortby = test_input($_POST["sortby"]);
        
// using above input get earthquake data from USGS.               
$result = file_get_contents('https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&limit=' . $limit . '&minmag=' . $minmag . '&orderby=' . $sortby . '');
// ensure it's encoded as UTF8 correctly.
$result = utf8_encode($result);
//decode in PHP assoc arrays 
$result = json_decode($result, true);
$i = 1;

// cycle through each returned earthquake and pull out required data to display.
foreach($result['features'] as $item){
// setup variable for GPS coordinates for Google Maps API.
$coords = $item['geometry']['coordinates'][1] . "%2C" . $item['geometry']['coordinates'][0];
//get date/time of each earthquake
$timedate = (int) ($item['properties']['time'] /1000);
//get USGS detail url for each earthquake
$link = $item['properties']['url'];

//print each result to screen in a bootstarp grid system. 
print "<div class='card col-sm-12 col-md-4 col-lg-3 col-xl-3 p-1 m-1'>
        <div class='card-header'>
            <h3>EarthQuake: <span id='quakenumber'>$i</span></h3>
        </div>
        <div class='card-body mx-auto'>
            <a href='" . $link . "' target='_blank'><img class='img-fluid' src='https://maps.googleapis.com/maps/api/staticmap?center=" . $coords ."&markers=" . $coords . "&zoom=4&maptype=terrain&size=400x250&key=AIzaSyDdb3Xz1H1zldZo72Nxze0V6iYHALnRmDY'></a>
            <div class='card-title'>
               <b>Location: </b><span id='place'>" . $item['properties']['place'] . "</span>
            </div>
            <div class='card-title'>
               <b>Magnitude: </b><span id='mag'>" . $item['properties']['mag'] . "</span>
            </div>
            <div class='card-title'>
               <b>Time: </b><span id='time'>" . gmstrftime('%R - %a %d %b %Y', $timedate) . "</span>
            </div>
        </div>
    </div>";
$i++;
}
    
    }
    // strip special chars etc to prevent security issues
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>