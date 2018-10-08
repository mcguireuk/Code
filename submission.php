

 <html>
     <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Comfortaa|Gothic+A1" rel="stylesheet">
               <link href="/league-gothic-master/webfonts/stylesheet.css" rel="stylesheet">
          <link rel="stylesheet" href="styles.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

     </head>
     
    <body class="black">
        <?php 
        include 'top-nav.php'; 
        ?>
        <div class="container-fluid pt-3 text-light">
    <?php
// define variables and set to empty values

        
$lat = $lon = $postcodeErr = "";
                    
function getlatlon($lookup){
    global $lat, $lon;
$result = @file_get_contents('https://api.postcodes.io/postcodes/' . $lookup);
if ($result === false){
    $postcodeErr = "Invalid Postcode, Please try again.";
            } else {   
$result = utf8_encode($result);  
$result = json_decode($result, true);
    //ensure it's encoded as UTF8 correctly.
$lat = $result['result']['latitude'];
$lon = $result['result']['longitude'];
}
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $tel = test_input($_POST["tel"]);
  $venue = test_input($_POST["venue"]);
  $street = test_input($_POST["street"]);
  $town = test_input($_POST["town"]);
  $postcode = test_input($_POST["postcode"]);
  $meetride = test_input($_POST["meetride"]);
  $frequency = test_input($_POST["frequency"]);
  $dayofweek = test_input($_POST["dayofweek"]);
  $dayofmonth = test_input($_POST["dayofmonth"]);
  $otherdetail = test_input($_POST["otherdetail"]);
  $timeofday = test_input($_POST["timeofday"]);
  $othermeet = test_input($_POST["othermeet"]);    
  $startpostcode = test_input($_POST["startpostcode"]);
  $endpostcode = test_input($_POST["endpostcode"]);    
  $ridename = test_input($_POST["ridename"]);
  $date = test_input($_POST["ridedate"]);
  $time = test_input($_POST["ridetime"]);
  $otherride = test_input($_POST["otherride"]);    
  
  addSubmission($name, $email, $tel, $venue, $street, $town, $postcode, $meetride, $frequency, $dayofweek, $dayofmonth, $othermeet, $timeofday, $otherdetail, $startpostcode, $endpostcode, $ridename, $date, $time, $otherride);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function addSubmission($name, $email, $tel, $venue, $street, $town, $postcode, $meetride, $frequency, $dayofweek, $dayofmonth, $othermeet, $timeofday, $otherdetail, $startpostcode, $endpostcode, $ridename, $date, $time, $otherride){
$servername = "localhost";
$username = "admin";
$password = "228Sj9vj";
$dbname = "meetsdb";
    
 global $lat, $lon;
    
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
global $meetride;
if ($meetride == "meet"){ 
    getlatlon($postcode);
    if(strpbrk($frequency, "other")){
        $frequency = "Other";
    }
// sql to create table
$stmt = $conn->prepare("Insert into meets_table(email, FullName, street, placeName, town, postcode, tel, lat, lon, meetride, frequency, dayofweek, dayofmonth, timeofday, othermeet, otherdetail) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssdddsssisss", $email, $name, $street, $venue, $town, $postcode, $tel, $lat, $lon, $meetride, $frequency, $dayofweek, $dayofmonth, $timeofday, $othermeet, $otherdetail);
$stmt->execute();
$stmt->close();
$conn->close();
    
} else {
    getlatlon($startpostcode);
    $stmt = $conn->prepare("Insert into meets_table(email, FullName, startpostcode, endpostcode, tel, lat, lon, meetride, ridename, date, time, otherride) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssdddsssss", $email, $name, $startpostcode, $endpostcode, $tel, $lat, $lon, $meetride, $ridename, $date, $time, $otherride);
$stmt->execute();
$stmt->close();
$conn->close();
}

    
}
?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-row align-items-center">
                        <div class="col-md-4 p-1">
                    <label class="sr-only" for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-4 p-1">
                    <label class="sr-only" for="email">Email:</label>
                    <input type="email" class="form-control col" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-4 p-1">
                    <label class="sr-only" for="tel">Telephone Number:</label>
                    <input type="tel" class="form-control col" name="tel" placeholder="Contact Number">
                        </div>
    </div>
    <div class="form-row justify-content-center">
        <div class="col-auto mt-2">
                    <div class="form-check-inline py-1">Meet or Ride: 
                    <input class="form-check-input m-1" type="radio" name="meetride" value="meet"/><label class="form-check-label">Meet</label>
 					<input class="form-check-input m-1" type="radio" name="meetride" value="ride"/><label class="form-check-label">Ride</label>
                    </div>
        </div>
    </div>
        
        <div id="meetform" class="form-row" style="display:none;">
        <div class="col-md-12">
                    <label for="venue">Name of place/venue:</label>
                    <input type="text" class="form-control" name="venue" placeholder="Place Name">
        </div>
        <div class="col-md-5">
                    <label for="street">Street Name: </label>
                    <input type="text" class="form-control" name="street" placeholder="Street">
        </div>
        <div class="col-md-5">
                    <label for="town">Town Name: </label>
                    <input type="text" class="form-control" name="town" placeholder="Town">
        </div>
        <div class="col-md-2">
                    <label for="postcode">Postcode: </label><span class="text-light mr-md-3"><?php echo $postcodeErr; ?></span>
                    <input type="text" class="form-control" name="postcode" placeholder="Postcode">
        </div>
            <div class="col-md-6">
                        <label for="frequency">How often do they meet?</label>
                        <select name="frequency" class="form-control" >
                        <option>Please select</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Other - First Wednesday in the Month etc</option>
                        </select>
            </div>
            <div class="col">
                <div class="row">
                    <div id="weekly" class="col-12 order-1" style="display:none;">
                <label for="day of week">What day do they meet?</label>
                <select name="dayofweek" class="form-control">
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                    <option>Sunday</option>
                </select>
            </div>
                    <div id="monthly" class="col-12 order-1" style="display:none;">
                <label for="day of month">What day do they meet?</label>
                <input type="number" name="dayofmonth" class="form-control" min="1" max="31" placeholder="1-31">
                </div>
                    <div id="other" class="col" style="display:none;"><label for="otherdetail">Please provide details below?</label>
                <textarea name="otherdetail" class="form-control" rows="6"></textarea>
                </div>
                    <div id="details" class="col-12 order-last" style="display:none;">
                        <label for="timeofday">What time do they meet?</label>
                        <select name="timeofday" class="form-control">
                            <option>Morning</option>
                            <option>Midday</option>
                            <option>Evening</option>
                        </select>
                        <label for="othermeet">Any other detail to note?</label>
                        <textarea name="othermeet" class="form-control" rows=3></textarea>
                    </div>
                </div>
            </div>
                        
        </div>
        <div id="rideform" class="form-row" style="display:none;">             
                        <div class="col-md-5 form-group">
                            <label for="datetime">Ride name?</label>
                            <input class="form-control" type="text" name="ridename" placeholder="Easter Egg Run">
                            <div class="form-row mt-2">
                            <div class="col-6">
                            <label for="ridedate">What date?</label>
                            <input class="form-control" type="date" name="ridedate" placeholder="DD/MM/YY">
                            </div>
                            <div class="col-6">
                            <label for="ridetime">What time?</label>
                            <input class="form-control" type="time" name="ridetime" >
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="startpostcode">Start point?</label>
                            <input class="form-control mb-2" type="text" name="startpostcode" placeholder="Postcode">
                            <label for="endpostcode">End point?</label>
                            <input class="form-control" type="text" name="endpostcode" placeholder="Postcode">
                        </div>
                        <div class="col form-group">
                            <label for="otherride">Please provide other details below?</label>
                            <textarea name="otherride" class="form-control p-0" rows="5"></textarea>
                        </div>
        </div>
                    <button type="submit" class="btn btn-dark mt-3" name="submit" value="submit">Submit</button>
          </form>
        
            <script>
                        
                
$("input[name='meetride']:radio")
    .change(function() {
  $("#meetform").toggle($(this).val() == "meet");
      $("#rideform").toggle($(this).val() == "ride");
});
                
$("select[name='frequency']")
    .change(function() {           
    $("#weekly").toggle($(this).val() == "Weekly");
    $("#monthly").toggle($(this).val() == "Monthly");
    $("#other").toggle($(this).val().includes("Other"));
    if (($(this).val() == "Weekly") || ($(this).val() == "Monthly")){
    $("#details").toggle(true);
    } else {
            $("#details").toggle(false);

    }
   
      });
            </script>
        </div>
    </body>
    </html>
    
