<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .mySlides {
            display: none;
        }

        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Lato", sans-serif
        }

    </style>
</head>
<body>
<!-- this is the navbar -->
<ul class="w3-navbar w3-large w3-black w3-left-align w3-top">
    <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
        <a href="javascript:void(0);" onclick="myFunction()" class="w3-text-white w3-padding-16">☰</a>
    </li>
    <li><a href="index.php" class="w3-text-white w3-padding-16">Home</a></li>
    <li class="w3-hide-small"><a href="music.php" class="w3-text-white w3-padding-16">Music</a></li>
</ul>

<div id="demo" class="w3-hide w3-hide-large w3-hide-medium w3-top">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
        <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
            <a href="javascript:void(0);" onclick="myFunction()" class="w3-text-white w3-padding-16">☰</a>
        </li>
        <li><a href="index.php" class="w3-text-white w3-padding-16">Home</a></li>
        <li><a href="music.php" class="w3-text-white w3-padding-16">Music</a></li>

    </ul>
</div>
<div class="w3-content w3-section  w3-animate-opacity" style="max-width:100%">
    <img class="mySlides" src="photo/img_la.jpg" style="width:100%" width="100%">
    <img class="mySlides" src="photo/img_ny.jpg" style="width:100%">
    <img class="mySlides" src="photo/img_chicago.jpg" style="width:100%">
</div>
<!-- nav and silde end here -->


<div class="w3-row w3-container w3-animate-opacity">
    <p class="w3-xlarge" align="center" style="letter-spacing:10px;">The Music Category</p>
    <div class="w3-col m4 w3-white" align="center" style="padding:10px">
        <div class="w3-card-12" style="width:85%">
            <img src="photo/img_la.jpg" alt="Norway" style="width:100%">
            <div class="w3-container">
                <br>
                <button class="w3-btn w3-ripple">Pop</button>

            </div>
            <br>
        </div>
    </div>

    <div class="w3-col m4 w3-white" align="center" style="padding:10px">
        <div class="w3-card-12" style="width:85%">
            <img src="photo/img_la.jpg" alt="Norway" style="width:100%">
            <div class="w3-container">
                <br>
                <button class="w3-btn w3-ripple">Rock</button>
            </div>
            <br>
        </div>
    </div>

    <div class="w3-col m4 w3-white" align="center" style="padding:10px">
        <div class="w3-card-12" style="width:85%">
            <img src="photo/img_la.jpg" alt="Norway" style="width:100%">
            <div class="w3-container">
                <br>
                <button class="w3-btn w3-ripple">Hip Hop</button>
            </div>
            <br>

        </div>
    </div>
</div>

<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
    <h2 class="w3-wide">THE SKULL</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">We have created a music free downloading website.
        The aim to creating this website is we can download the music when we want to listen.
        This website can search the music with three different ways.
        One you can search with the music category, eg(rock, pop, hiphop, etc).
        Next you can search with your favorites music name,
        and you also can search with the name of music albums.
        You can download the music.
        Please let share our website link on your social network.
        Thank you, Enjoy your life with the music!</p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col s4">
            <p>Name</p>
            <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        </div>
        <div class="w3-col s4">
            <p>Name</p>
            <img src="img_bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
        </div>
        <div class="w3-col s4">
            <p>Name</p>
            <img src="img_bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
        </div>
    </div>
</div>


<div class="w3-container w3-padding-64 w3-theme-l5 w3-light-grey">
    <div class="w3-row" style="margin-left:10%;margin-right:10%">
        <div class="w3-col m5">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-black w3-bottombar">Contact Us</span></div>
            <h3>Address</h3>
            <p><i class="fa fa-map-marker w3-text-black w3-xlarge"></i>&nbsp;&nbsp;Yangon, MYANMAR</p>
            <p><i class="fa fa-phone w3-text-black w3-xlarge"></i>&nbsp;&nbsp;+959789333573</p>
            <p><i class="fa fa-envelope-o w3-text-black w3-xlarge"></i>&nbsp;&nbsp;bigblackhacker2015@gmail.com</p>
        </div>
        <div class="w3-col m7">
            <form class="w3-container w3-card-2 w3-padding-16 w3-white">
                <div class="w3-group">
                    <label class="w3-label w3-text-black">Name</label>
                    <input class="w3-input" type="text">
                </div>
                <div class="w3-group">
                    <label class="w3-label w3-text-black">Email</label>
                    <input class="w3-input" type="text">
                </div>
                <div class="w3-group">
                    <label class="w3-label w3-text-black">Subject</label>
                    <textarea class="w3-input"></textarea>
                </div>
                <button type="button" class="w3-btn w3-theme">Send</button>
            </form>
        </div>
    </div>
</div>


<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center w3-black">
    <p>Powered by <a href="default.html" target="_blank">Aung Myo Oo && Pyae Sone</a></p>
</footer>


<script>
    function myFunction() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show w3-animate-opacity";
        } else {
            x.className = x.className.replace(" w3-show w3-animate-opacity", "");
        }
    }
</script>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_navbar_hide by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jun 2016 11:33:35 GMT -->
</html>

