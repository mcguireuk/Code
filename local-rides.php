 <html>
     <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Comfortaa|Gothic+A1" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
               <link href="/league-gothic-master/webfonts/stylesheet.css" rel="stylesheet">

          <link rel="stylesheet" href="styles.css">
     </head>
    <body class="black" onload="sortByValue()">
        <script>
          // function to load clicked image into modal larger view
         function setModalImage(id){
         var clickedCard = id.getAttribute("name");
         var seturl = document.getElementById("map");
             debugger;
         
         seturl.setAttribute("src", clickedCard);
         
         }
         
                
               
      </script>
        <?php
            include 'top-nav.php';
            ?>
         <?php 
        
        $postcodeErr = $distanceErr = $result = "";
        $formvalidated = false;
        $address = $distance = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["address"] == NULL){
            $postcodeErr = "Please supply a postcode for the search.";
        } else {
            $address = test_input($_POST["address"]);
            global $result;
            $result = @file_get_contents('https://api.postcodes.io/postcodes/' . $address);
        if ($result === false){
        $postcodeErr = "Invalid Postcode, Please try again.";
            }
            
        }
        if($_POST["distance"] == NULL){
            $distanceErr = "Default distance of 10 miles used.";
            $distance = 10;
        } else {
            $distance = test_input($_POST["distance"]); 
        }
        }
        ?>
        <div class="container-fluid pt-3">
   <div class="col-12 header-small text-center">Biker-Rides</div>
<div class="navbar justify-content-center">
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-inline ">
                    <label for="address"><span class="text-light mr-md-3">Your Postcode:</span></label><span class="text-light mr-md-3"><?php echo $postcodeErr; ?></span>
                        <input type="address" class="form-control col-sm-12 col-lg mb-2 mr-md-3" name="address" placeholder="Postcode" value="<?php echo $address; ?>">                   
                    <label for="distance"><span class="text-light mr-md-3">Max Distance:</span></label><span class="text-light mr-md-3"><?php echo $distanceErr; ?></span>
                        <input type="number" class="form-control col-sm-12 col-lg mb-2 mr-md-3" name="distance" min="10" placeholder="10" value="<?php echo $distance; ?>">
                    <button type="submit" class="btn btn-dark col-sm-12 col-lg mb-2" name="submit" value="submit">Go!</button>
                
                
                <script>function sortByValue(){
  var idkeyvalue = [];
  var i = 1;
  while (document.getElementById(i) != null){
    var tempvalue = document.getElementById((i + "d")).innerHTML;
    var dist = Number(tempvalue.substring(0, tempvalue.search("k")));
    var keystr = "key: " + i;
    
   idkeyvalue[i] = {key: i, dist: dist};   
    i++;
  }
  
                function compare(a, b){
                    const distA = a.dist;
                    const distB = b.dist;
                    
                    let comparison = 0;
                    
                    if (distA < distB){
                        comparions = -1;
                    } else if (distA > distB){
                        comparison = 1;
                    }
                    
                    return comparison;
                    
                }
                
         idkeyvalue.sort(compare);   
            
        var length = i - 1;
    for (var x = 0; x < length; x++){
        
        document.getElementById(idkeyvalue[x].key).style.order = x;
    }            
    
  }                 
                    
                    
        
                    </script>
                </div>
          </form>
        </div>
        <div class="container">
            <div class="modal fade bg-dark" id="directions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content bg-secondary" >
                  <div class="modal-body mx-auto w-100" >
                      <iframe id="map" src="" width="100%" height="85%"></iframe>
                     <div class="modal-footer border-0">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            </div>
            <div class="row mt-5 mt-lg-4 p-1 justify-content-center">
             <?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
$latitude;
$longitude;
        
  getLatLon($address);    
  $maxLat = getMaxLat($address, $distance);
  $maxLon = getMaxLon($address, $distance);
  
$latMinus = $latitude - $maxLat;
$latPlus = $latitude + $maxLat;
$lonMinus = $longitude - $maxLon;
$lonPlus = $longitude + $maxLon;
   
    
  getMeets($address, $distance);
    
} else {
        die;    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function getlatLon($address){
    global $latitude, $longitude, $result;
//ensure it's encoded as UTF8 correctly.
$result = utf8_encode($result);
//decode in PHP assoc arrays 
$result = json_decode($result, true);
$latitude = $result['result']['latitude'];
$longitude = $result['result']['longitude'];
}
            
function getMaxLat($address, $distance){
$earth_radius = 3960.0;
$radians_to_degrees = 180.0/pi();
     
return ($distance/$earth_radius)*$radians_to_degrees;
}  
            
function getMaxlon($address, $distance){
global $latitude;
$earth_radius = 3960.0;
$degrees_to_radians = pi()/180.0;
$radians_to_degrees = 180.0/pi();
 
$r = $earth_radius*cos($latitude*$degrees_to_radians);
    
    return ($distance/$r)*$radians_to_degrees;
     
}
            
function getMeets($address, $distance){
    global $latMinus, $latPlus, $lonMinus, $lonPlus;
    

$servername = "localhost";
$username = "admin";
$password = "228Sj9vj";
$dbname = "meetsdb";
    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$stmt = $conn->prepare("select ridename, startpostcode, endpostcode, date, time, otherdetails, lat, lon from meets_table where meetride = 'ride' AND lat between ? AND ? AND lon between ? AND ? ORDER BY lat, lon");
$stmt->bind_param("dddd", $latMinus, $latPlus, $lonMinus, $lonPlus);
    $stmt->execute();
    $stmt->bind_result($ridename, $startpostcode, $endpostcode, $date, $time, $otherdetails, $lat, $lon);
    $i=1;
       
    while($stmt->fetch()){
              
$result = @file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins=' . urlencode($address) . '&destinations=' . urlencode($startpostcode) . '&departure_time=now&key=AIzaSyC8y8MUHQDcZQEb7PhMKH41ujmvYrSgRL0');
                
$result = json_decode($result);
        
$distance = $result->rows[0]->elements[0]->distance->text;
$distance = str_replace(' ', '', $distance);

                
        print "<div id='" . $i . "' class='card fade show card-shadow border-dark bg-dark text-light col-sm-12 col-md-5 col-lg-4 col-xl-3 p-0 m-2'>
        <img class='img-fluid card-img-top' src='https://maps.googleapis.com/maps/api/staticmap?center=" . $startpostcode ."&markers=" . $startpostcode ."&zoom=18&maptype=road&size=400x250&key=AIzaSyDdb3Xz1H1zldZo72Nxze0V6iYHALnRmDY'>
        <div class='card-header'>
            <h6><span id='placeName'>". ucwords($ridename) . "</span></h6>
        </div>
        <div class='card-body mx-auto'>
            
           <div class='card-text'>
               <b>Date: </b><span id='data'>" . $date . "</span>
            </div>
            <div class='card-text'>
               <b>Time: </b><span id='time'>" . $time . "</span>
            </div>
            <div class='card-text'>
               <b>Details: </b><span id='otherdetails'>" . $otherdetails . "</span>
            </div>
            </div>
            <div class='card-footer row justify-content-between px-4'>
            <div id='" . $i . "d' class='text-muted'>" . $distance . " / " . round($distance/1.6, 1) . "mi away</div><div><button class='btn btn-secondary text-white'><a class='text-light' name='https://www.google.com/maps/embed/v1/directions?origin=" . $address . "&destination=" . $lat . "," . $lon . "&key=AIzaSyBL2IUP3VYh1DizJV6bSUaKCyd5zLCidXA' href='' data-toggle='modal' data-target='#directions' onclick='setModalImage(this)'>Directions</a></button></div>
            </div>
        
    </div>";
    $i++;
    
    }
    
   
    
$stmt->close();
$conn->close();
 
}

?>
            </div>
        </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
    
