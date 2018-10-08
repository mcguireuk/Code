<?php 
// Top navbar used on all pages. 
print
"
<!DOCTYPE html>
<style> 
.top {
position: fixed;
top: 0;
width: 100%;
z-index: 2;
}
</style>

 <nav class='navbar navbar-expand-lg navbar-dark bg-dark top'>
  <a class='navbar-brand' href='CV.html' target='_blank'>SM CV</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
      <li class='nav-item'>
        <a class='nav-link' id='SM Photo' href='index.php'>SM Photo</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' id='SM Code' href='code.php'>SM Code</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' id='SM Quake' href='quake.php'>SM Quake</a>
      </li>
    </ul>
  </div>
</nav>";

?>