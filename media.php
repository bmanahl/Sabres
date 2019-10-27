<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
  include('login.php');
  include('logout.php');//add logout button
  include('register.php');
  session_start();//ensures whole website has session
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Moms Against AI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>  
 
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #4663e8;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: ##2b3e94;
    font-size: 50px;
  }
  .logo {
    color: ##2b3e94;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #2b3e94;
  }
  .carousel-indicators li {
    border-color: #2b3e94;
  }
  .carousel-indicators li.active {
    background-color: #2b3e94;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #2b3e94; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #2b3e94;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #2b3e94 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #2b3e94;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #2b3e94;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #2b3e94 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #2b3e94;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
   
   
.glyphicon.glyphicon-home {
       font-size: 45px;
    }


    input[type=text], 
    input[type=password] { 
        width: 100%; 
        padding: 15px 15px; 
        margin: 15px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
    } 
    
    button { 
        background-color: #1b1d45; 
        color: white; 
        padding: 15px 20px; 
        margin: 5px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
    } 
    
    button:hover { 
        opacity: 0.8; 
    } 
    
    .cancelbtn { 
        width: auto; 
        padding: 10px 18px; 
        background-color: #f44336; 
    } 
  
    .imgcontainer { 
        text-align: center; 
        margin: 24px 0 12px 0; 
        position: relative; 
    } 
    
    img.avatar { 
        width: 40%; 
        border-radius: 50%; 
    } 
    
    .container { 
        padding: 16px; 
    } 
      
    span.psw { 
        float: right; 
        padding-top: 16px; 
    } 
     
    .modal { 
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0; 
        top: 0; 
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0, 0, 0); 
        background-color: rgba(0, 0, 0, 0.4); 
        padding-top: 60px; 
    } 
    
    .modal-content { 
        background-color: #fefefe; 
        margin: 7% auto 25% auto; 
        border: 1px solid #888; 
        width: 100%; 
    } 
    
    
    .close { 
        position: absolute; 
        right: 25px; 
        top: 0; 
        color: #000; 
        font-size: 35px; 
        font-weight: bold; 
    } 
      
    .close:hover, 
    .close:focus { 
        color: red; 
        cursor: pointer; 
    } 
	
    .animate { 
        -webkit-animation: animatezoom 0.6s; 
        animation: animatezoom 0.6s 
    } 
      
    @-webkit-keyframes animatezoom { 
        from { 
            -webkit-transform: scale(0) 
        } 
        to { 
            -webkit-transform: scale(1) 
        } 
    } 
      
    @keyframes animatezoom { 
        from { 
            transform: scale(0) 
        } 
        to { 
            transform: scale(1) 
        } 
    } 
      
    @media screen and (max-width: 300px) { 
        span.psw { 
            display: block; 
            float: none; 
        } 
        .cancelbtn { 
            width: 100%; 
        } 
    } 
  
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
	<li><a href="#mission">MISSION</a></li>
        <li><a href="#values">CORE BELIEFS</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
		
		<!--login button-->
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> 
  
        <div id="id01" class="modal"> 
  
        <form class="modal-content animate" action="/login.php"> 
            <div class="imgcontainer"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
            </div> 
  
            <div class="container"> 
                <label><b>Username</b></label> 
                <input type="text" placeholder="Enter Username" name="uname" required> 
  
                <label><b>Password</b></label> 
                <input type="password" placeholder="Enter Password" name="psw" required> 
  
                <button type="submit" formaction="login.php">Login</button> 
                <input type="checkbox" checked="checked"> Remember me 
            </div> 
  
            <div class="container" style="background-color:#f21414"> 
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
                <span class="psw">Forgot <a href="#">password?</a></span> 
            </div> 
        </form> 
    </div> 
  
    <script> 
        var modal = document.getElementById('id01'); 
        window.onclick = function(event) { 
            if (event.target == modal) { 
                modal.style.display = "none"; 
            } 
        } 
    </script>
		
	<!--signup button-->	
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SignUp</button> 
  
    <div id="id02" class="modal"> 
  
      <form class="modal-content animate" action="/login.php"> 
         <div class="imgcontainer"> 
             <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
         </div> 
  
         <div class="container"> 
            <label><b>Create Username</b></label> 
            <input type="text" placeholder="New Username" name="uname" required> 
  
            <label><b>Create Password</b></label> 
            <input type="password" placeholder="New Password" name="psw" required> 
  
            <button type="submit">SignUp</button> 
         </div> 
  
         <div class="container" style="background-color:#f1f1f1"> 
             <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
         </div> 
      </form> 
   </div> 
  
   <script> 
      var modal = document.getElementById('id01'); 
      window.onclick = function(event) { 
       if (event.target == modal) { 
          modal.style.display = "none"; 
       } 
     } 
    </script>	
	
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Moms Against Articial Intelligence (AI)</h1> 
  <p>The robots are coming...</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Welcome, but please don't be a binary stranger</h2><br>
      <h4>Moms Against AI is the latest to wage war against those darn AI robots</h4><br>
      <p>Raising kids now of days is simply hard enough to deal with in ever day life and it's hard to keep up with all this darn technology. 
	Technology is good up to a point and we don't need any darn robots messin around with a good thing or better known as modern day society. 
	If you are like the many moms out there who have already joined the fight because they dont to walk a robot dog, they don't need a computer 
	teaching them Spanish, they certainly don't need a robot to shop for them, and they don't think robots are funny...at all. So if you aren't 
	with us, that means that you ARE WITH THEM!</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
     <img src="https://02varvara.files.wordpress.com/2008/06/we-can-do-it-rosie-the-riveter-us-wwii-poster.jpg" style="max-width:100%;" alt="">
    </div>
  </div>
</div>

<div id="mission" class="container-fluid bg-warning">
  <div class="row">
    <div class="col-sm-4">
      <img src="https://media.giphy.com/media/zFHRIrAvWjHzO/giphy.gif" style="max-width:100%;" alt="">
    </div>
    <div class="col-sm-8">
      <h2>Mission Statement</h2><br>
      <h4>Your mission, should you choose to accept it, is to go out there and stop companies from developing AI for future savings, thus preventing smart robots. Let's face it, 
	have you ever had a robot stomp on your chest like what is depicted by the caption? The answer depends, but probably not. Although this is just a 
	cartoon, so was the Jetsons back in the 60's and look at what happened...Things started changing and now you can talk to your grand kids on 
	that telephone while conversating and you can ride in a somewhat questionable vehicle without a driver, imagine that! It's only a matter of 
	time before AI is implemented into robots properly leaving children like little Susey (depicted to the left) to be stomped on by a carefree robot who doesn't give a shit...This 
	is unacceptable! We must prevent situations like this from ever taking place by going on that internet and spreading the bad news about those AI robots! </h4><br>
    </div>
  </div>
</div>

<!-- Container (Values Section) -->
<div id="values" class="container-fluid text-center">
  <h2>Values</h2>
  <h4>The 6 values of virtue</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Power in numbers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Love thy neighbor, not thy AI robot</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>FINISH THE JOB</h4>
      <p>Show no mercy until all AI has been eradicated</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>PROMOTE NATURE</h4>
      <p>If it was good enough before AI, it's good enough now</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-list-alt logo-small"></span>
      <h4>KNOWLEDGE IS POWER</h4>
      <p>In order to beat AI you must become AI through internet knowledge. Or purchase and memorize our AI encyclopedia, only $199</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK PAYS OFF</h4>
      <p>With enough hard work put in, we can eliminate all AI together!</p>
    </div>
  </div>
</div>





 <!-- START THE FEATURETTES -->
<div id="events" class="container-fluid text-center bg-warning">
<h2>Events and Happenings</h2><br>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8 text-center">
            <h2 class="featurette-heading">March Against Computers</h2>
            <p class="lead">Get your Fight on and Protest AI! The time is now, protect future generations from AI takeover!</p>
         <a href="" class="btn btn-warning">Protest</a>
         </div>
          <div class="col-md-4">
            <img class="featurette-image img-fluid mx-auto" src="https://static01.nyt.com/images/2018/12/04/world/02france/02france-protest-3-facebookJumbo.jpg" alt="" width="400" height="300">

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8 order-md-2 text-center">
            <h2 class="featurette-heading">Donor Luncheons</h2>
            <p class="lead">Eat, Drink and be Merry all while you discuss with other moms around your location of how to stop this AI invasion within your community</p>
            <a href="/welcome/social" class="btn btn-warning">I'm hungry</a>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="http://catalina-high-school-1960-grads.weebly.com/uploads/2/6/3/6/26365176/20190221-120327_orig.jpg" alt="" width="400" height="300">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8 text-center">
            <h2 class="featurette-heading">Newsletter</h2>
            <p class="lead">Join the Newsletter and discover new events taking place in the world of AI</p>
            <a href="/welcome/cultural" class="btn btn-warning">News</a>
          </div>
          <div class="col-md-4">
            <img class="featurette-image img-fluid mx-auto" src="http://i.poweredtemplates.com/i/br/03/136/newsletter_template_b.jpg" alt="" width="400" height="300">
          </div>
        </div>



        </div>

</div><br>

  
  <center><h2>QUOTES OF THE MONTH</h2></center>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This website is the best of the best sir. AI is bad for Pawnee"<br><span>Leslie Knope, Vice President, HP</span></h4>
      </div>
      <div class="item">
        <h4>"Four words...Can AI grow beets?!"<br><span>Dwight Schrute, Salesman, Dunder Mifflin</span></h4>
      </div>
      <div class="item">
        <h4>"Could I...BE any more happy with this cause?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Denver, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 7229867443</p>
      <p><span class="glyphicon glyphicon-envelope"></span> momsAgainstAI@gmail.com</p>
    </div>
      </div>
    </div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>