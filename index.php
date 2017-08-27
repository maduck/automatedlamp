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
<!--
<?php

$lights = [
	"td" => [
		"display_name" => "TD",
		"description" => "...",
		"pin" => 2
	],
	"tb" => [
		"display_name" => "TB",
		"description" => "...",
		"pin" => 3
	],
	"kk" => [
		"display_name" => "KK",
		"description" => "...",
		"pin" => 4
	]
];

$colors = [
	"on" => "w3-pale-green",
	"off" => "w3-pale-red"
];
$switch_text = [
	"on" => "off",
	"off" => "on"
];
var_dump($colors);

$path = "/home/pi/automatedlamp";
$lights_data = array();
foreach ($lights as $light => $entry) {
	$pin = $entry["pin"];
	if (isset($_POST["id"]) and $_POST["id"] == $light){
		$status = exec("$path/light_switch.py --pin $pin --switch reverse"); 
	} else {
		$status = exec("$path/light_switch.py --pin $pin"); 
	}
	$entry['status'] = $status;
	$entry["switch_text"] = $switch_text[$status];
	$entry['color'] = $colors[$status];
	$lights_data[$light] = $entry;
	var_dump($entry);
}
?>
-->
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
	<?php
	foreach ($lights_data as $light => $entry) {
	?>
        <div class="w3-third w3-margin-bottom">
	  <div class="w3-container <?php echo $entry["color"] ?>">
	  <p><b><?php echo $entry["name"] ?></b></p>
	  <p><?php echo $entry["description"] ?></p>
	    <form method="post">
		<input type="hidden" name="id" value="<?php echo $light ?>" />
 	        <button class="w3-button w3-black w3-margin-bottom" name="button">switch <?php echo $entry["switch_text"]; ?></button>
            </form>
          </div>
        </div>
	<?php
	}
	?>
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
