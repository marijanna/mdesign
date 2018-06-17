<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>m design</title>

</head>
<body>

	<nav>
		<ul>
			<li><a href="#">početna</a></li>
			<li><a href="#usluge">usluge</a></li>
			<li><a href="#portfolio">portfolio</a></li>
			<li><a href="#kontakt">kontakt</a></li>
		</ul>
	</nav>

  <center>	
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/img1.jpg" alt="First slide" >
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img2.jpg" alt="Second slide" >
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/img3.jpg" alt="Third slide" >
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <div id="usluge" class="navlink">
      
     <a href="#usluge">| USLUGE |</a>

   </div>	


   <div class="flex-container">
    <div class="row">
     

      <div class="col-sm"><a href="img/graficki.png"><img src="img/graficki1.png"></a></div>
      <div class="col-sm"><a href="img/web.png"><img src="img/web1.png"></a></div>
      <div class="col-sm"><a href="img/internet.png"><img src="img/internet1.png"></a></div>
    </div>
  </div>




  <div id="portfolio" class="navlink">
    
    <a href="#portfolio">| PORTFOLIO |</a>

  </div>  

  <div class="flex-container">
    <div class="row">
     

      <div class="col-sm"><a href="img/portfolio1.jpg"><img src="img/portfolio1.jpg"></a></div>
      <div class="col-sm"><a href="img/portfolio2.jpg"><img src="img/portfolio2.jpg"></a></div>
      <div class="col-sm"><a href="img/portfolio3.jpg"><img src="img/portfolio3.jpg"></a></div>
    </div>
  </div>

  <div id="kontakt" class="navlink">
    
    <a href="#kontakt">| KONTAKT |</a>

    

    <?php

    $ime = "";
    $email = "";
    $poruka = "";

    $errIme = "";
    $errEmail = "";
    $errPoruka = "";



    if (isset($_POST['submit'])) {
  	//ime
     if(!empty($_POST['ime'])) {
      $ime=$_POST['ime'];
      
    } else {

      
      $errIme= "Molimo Vas unesite Vaše ime i prezime";

    }
//email

    if(!empty($_POST['email'])) {
      $email=$_POST['email'];
      
    } else {

      
      $errEmail= "Molimo Vas unesite Vaš email";

    }

//poruka
    if(!empty($_POST['poruka'])) {
      $poruka=$_POST['poruka'];
      
    } else {

      
      $errPoruka= "Molimo Vas unesite Vašu poruku";

    } 

    if ( $errIme== "" && $errEmail== "" && $errPoruka== "") {
      echo "Poruka je uspešno poslata!";
    } else {
      echo "Poruka nije poslata, molimo Vas proverite Vašu formu!";
    }

  }
  ?> 

  <div class="row">
    <div class="col-sm">

    	<form  method="post" action="index.php">
    		<table>
    			<tr>
    				<td>Vaše ime i prezime:</td>
    				<td><input type="text" name="ime">
             <?php
             if ($ime == "") {
              echo $errIme;
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>E-mail:</td>
          <td><input type="text" name="email">
           <?php
           if ($email == "") {
            echo $errEmail;
          }
          ?>

        </td>
      </tr>
      <tr>
        <td>Vaša poruka:</td>
        <td><textarea name="poruka"></textarea>
         <?php
         if ($poruka == "") {
          echo $errPoruka;
        }
        ?>

      </td>
    </tr>
    <tr>
      <td><button class="btn btn-lg" type="submit" name="submit">Pošalji</button></td>
    </tr>
  </table>
</form>
</div>


<div class="col-sm">
  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAxyZlI7WCd2t8QbjZWr4xXqWMSNK6UMLE'></script>
  <div style='overflow:hidden;height:300px;width:300 px;'>
    <div id='gmap_canvas' style='height:300px;width:300 px;'></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
  </div> 
  <a href='https://add-map.com/'>embed google map wordpress</a> 
  <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=ff6ce784facedf3e974d66adc5f4c2e85ea04b2b'></script>
  <script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(44.8186,20.46810000000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.8186,20.46810000000005)});infowindow = new google.maps.InfoWindow({content:'<strong>M design</strong><br>Bircaninova 75<br>14000 Valjevo<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div></div>


<div class="footer">
  <a href="https://www.facebook.com/"><img src="img/facebook.png"></a>
  <a href="https://www.instagram.com"><img src="img/insta.png"></a>
  <a href="https://www.wordpress.com"><img src="img/wordpress.png"></a>
  <a href="https://www.twitter.com"><img src="img/tvitter.png"></a>
</div> 

</center>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>