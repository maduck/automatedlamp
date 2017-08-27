<!DOCTYPE html>
<html>
<title>IoT Interface</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<?php
if (isset($_POST['tdlightOn'])) {
  exec("sudo python /home/pi/tdlightOn.py", $out);
  var_dump($out);
  alert($out);
} 
if (isset($_POST['tdlightOn'])) {
  exec("sudo python /home/pi/tdlightOn.py", $out);
  var_dump($out);
  alert($out);
}
if (isset($_POST['tdlightOff'])) {
  exec("sudo python /home/pi/tdlightOff.py", $out);
  var_dump($out);
  alert($out);
}
if (isset($_POST['tblightOn'])) {
  exec("sudo python /home/pi/tblightOn.py", $out);
  var_dump($out);
  alert($out);
}
if (isset($_POST['tblightOff'])) {
  exec("sudo python /home/pi/tblightOff.py", $out);
  var_dump($out);
  alert($out);
}
if (isset($_POST['kklightOn'])) {
  exec("sudo python /home/pi/kklightOn.py", $out);
  var_dump($out);
  alert($out);
}
if (isset($_POST['kklightOff'])) {
  exec("sudo python /home/pi/kklightOff.py", $out);
  var_dump($out);
  alert($out);
}
?>

<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#teras" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TERAS</a>
    <a href="#kamar" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KAMAR</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT ME</a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#teras" class="w3-bar-item w3-button w3-padding-large">TERAS</a>
  <a href="#kamar" class="w3-bar-item w3-button w3-padding-large">KAMAR</a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large">ABOUT ME</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Teras Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="teras">
    <div id="logo">
    <h1><a href="#">Home Automation</a></h1>
    <p>Antarmuka sistem otomatisasi rumah</p>
    <p class="w3-justify">Antarmuka ini dibuat untuk dapat mengontrol sistem otomatisasi lampu rumah. Saat ini menyediakan bagian <b>TERAS</b> dan <b>KAMAR</b>. Bagian teras terdiri dari teras depan dan teras belakang sedangkan bagian kamar terdiri dari kamar ken saja.</p>
    </div>
    <br><br>
    <h2 class="w3-wide">TERAS</h2>
    <p class="w3-opacity"><i>Bagian teras depan dan belakang</i></p>
    <div class="w3-row w3-padding-32" style="max-width: :800px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Teras Depan</b></p>
            <p>Tekan tombol "on" untuk menyalakan lampu dan "off" untuk mematikan lampu teras depan</p>
            <form method="post">
            <button class="w3-button w3-black w3-margin-bottom" name="tdlightOn">ON</button>&nbsp;
            <button class="w3-button w3-black w3-margin-bottom" name="tdlightOff">OFF</button>
            </form>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Teras Belakang</b></p>
            <p>Tekan tombol "on" untuk menyalakan lampu dan "off" untuk mematikan lampu teras belakang</p>
            <form method="post">
            <button class="w3-button w3-black w3-margin-bottom" name="tblightOn">ON</button>&nbsp;
            <button class="w3-button w3-black w3-margin-bottom" name="tblightOff">OFF</button>
            </form> 
          </div>
        </div>
      </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="kamar">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">KAMAR</h2>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Kamar Ken</b></p>
            <p>Tekan tombol "on" untuk menyalakan lampu dan "off" untuk mematikan lampu</p>
            <form method="post">
            <button class="w3-button w3-black w3-margin-bottom" name="kklightOn">ON</button>&nbsp;
            <button class="w3-button w3-black w3-margin-bottom" name="kklightOff">OFF</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About me section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="about">
    <h2 class="w3-wide w3-center">ABOUT ME</h2>
    <p class="w3-opacity w3-center"><i>Ken Reinhart</i><br><i>Informatik 2012</i><br><i>Paramadina University</i></p>
      </div>
    </div>
  </div>
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function alert($out) {
  echo "<script type='text/javascript'>alert('$out');</script>";
}
</script>

</body>
</html>
