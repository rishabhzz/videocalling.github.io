<!DOCTYPE html>
<html>
<title>Video Call</title>
 <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('https://w3schools.com/w3images/forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
video {
      max-width: 70%;
      max-height: 50%;
      margin: 0 0px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: Transparent;
    }
</style>









<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-middle">
  <br><br>
    <b><p class="w3-large w3-center">Share this website url with whom you want to vc.!</p></b>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center" id="demo"></p>
	<br><br>
    <div>
    	<center> <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video></center>
  </div>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="http://vibr.tech" target="_blank">ViBR Labs</a>
  </div>
</div>
<script>
document.getElementById("demo").innerHTML = 
"Copy this link: " + window.location.href;
</script>
 <script src="script.js"></script>
</body>
</html>
