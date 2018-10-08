<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php
// define variables and set to empty values
$name = $email = $tel = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $tel = test_input($_POST["tel"]);
  $message = test_input($_POST["message"]);
  
  send_email($name, $email, $tel, $message);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function send_email($name, $email, $tel, $message){

 $subject = "New Message from website smcode.x10.mx";
 $to = "mcguireuk@gmail.com";
 $body = "Message from: $name" . "\n Email adress: $email" . "\n Contact number: $tel" . "\n Message text: $message";
 
 mail($to,$subject,$body);
 mail($email,"A Copy of your message sent to SM Photography", $body);
}
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name"><br>
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email"><br>
                    <label for="tel">Telephone Number:</label>
                    <input type="tel" class="form-control" name="tel" placeholder="Contact Number"><br>
                    <label for="message">Message:</label>
                    <textarea type="text" class="form-control" name="message" rows="4" placeholder="Add Message"></textarea><br>
                    <button type="submit" class="btn btn-dark" name="submit" value="submit">Submit</button>
                </div>
          </form>
     </body>
</html>