<!DOCTYPE html>
<html>
<head>

	<title>Music Skull</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<style type="text/css">
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

	</style>
</head>
<body>
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/mancity.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>SKULL</b></h4>
  </div>
  <a href="#" class="w3-padding">HOME</a> 
  <a href="#" class="w3-padding">ABOUT</a> 
  <a href="#" class="w3-padding">SHARE</a>
  <ul style="list-style-type:none;">
  	<li><a href="#" class="w3-padding">SHARE</a></li>
  </ul>
   
  <div class="w3-section w3-padding-top w3-large">
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
  </div>
</nav>


<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars">_.-._</i></span>
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-btn w3-white w3-hover-black">ALL</button>
      <button class="w3-btn w3-white w3-hover-black">Category</button>
      <button class="w3-btn w3-white w3-hover-black">Artsit</button>
      <button class="w3-btn w3-white w3-hover-black">Albums</button>
    </div>
  </header>
  
  

  
</div>


<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>


</body>
</html>