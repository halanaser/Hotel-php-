<html>
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Frist Moblie Meta-->
        <title>Contact Pages</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <!--<link rel="stylesheet" href="css/normalize.css"> */-->  <!-- ÝÔ ÏÇÚí Çáæ áÇäæ ÈæÊÓÑÇÈ ÈÓÊÎÏãæ-->
        <link rel="stylesheet" href="css/Media.css"/>
        <link rel="stylesheet" href="css/hover.css"/>
         <link rel="stylesheet" href="css/animate.css"/>
        <link rel="stylesheet" href="css/aos.css"/>
      
        
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
       <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
    <!--suppress JSUnresolvedLibraryURL -->
       <link rel="stylesheet" href="css/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/star-rating.js" type="text/javascript"></script>
        <!--[if lt IE 9]-->
      <script src="js/html5shiv.min.js"></script> <!--ÈÊÚÑÝ ÚäÇÕÑ html5-->
      <script src="js/respond.min.js"></script>
    <!--[endif]-->
    </head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="index.ph">Hotal<br> <span>Four Star</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li ><a href="about.php">About</a></li>
        <li ><a href="contact.ph">Contact</a></li>
        <li ><a href="Room.php">Rooms</a></li>
		<li ><a href="REv.php">Reservation</a></li>


      </ul>
    </div>
  </div>
</nav> 
        <section class="header-contact">
            <div class="header-op-contact"></div>
              <div class="header-Text-contact">
                 <p class="lead"> Contact</p>
            </div>
			
    </section>
		<section class="wel">
			<div class="contanier">
			<div c;ass="wel-our">
				<h1>Thank you for choosing our website</h1>
			
			
			</div>
		</div>
		</section>
		
		
		<section class="map">
			 <div class="header-op-map"></div>
		</section>
		
		
		
		        
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="newsletter_content">
						<div class="section_title_container">
							<div class="section_title"><h2>Our Newsletter</h2></div>
						</div>
						<div class="newsletter_text">
						    <p>Our Best Rates are available here on our website!</p>
							<p>Great location and wonderful!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="searching.." required="required">
							<button class="newsletter_button"><span>Searching</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter_border_container"><div class="container"><div class="row border_row"><div class="col"><div class="newsetter_border"></div></div></div></div></div>
	</div>
        <hr>

        <footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo_container">
						<div class="footer_logo">
							<a href="index.php" class="text-center">
								<div class="footer_logo_subtitle">hotel</div>
								<div class="footer_logo_title"><?php 
								$servername="localhost";
								$username="root";
								$password="";
								$dbname="hotel";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "SELECT name FROM Hotel.hotel";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        echo $row["name"];
								    }
								} else {
								    echo "0 results";
								}
								
								?></div>
							
							</a>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</div>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-5 footer_col">
					<div class="footer_menu">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="index.phpl">Home</a></li>
							<li><a href="about.php">About us</a></li>
							<li><a href="rooms.php">Rooms</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="Reservation.php">Reservation</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_contact clearfix">
						<div class="footer_contact_content float-lg-right">
							<ul>
								<li>Address: <span><?php 
								$servername="localhost";
								$username="root";
								$password="";
								$dbname="hotel";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "SELECT adress FROM Hotel.hotel";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        echo $row["adress"];
								    }
								} else {
								    echo "0 results";
								}
								
								?></span></li>
								<li>Phone: <span>+<?php 
								$servername="localhost";
								$username="root";
								$password="";
								$dbname="hotel";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "SELECT Phone_number FROM Hotel.hotel";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        echo $row["Phone_number"];
								    }
								} else {
								    echo "0 results";
								}
								
								?></span></li>
								<li>Email: <span><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="30495f45425d51595c70575d51595c1e535f5d"><?php 
								$servername="localhost";
								$username="root";
								$password="";
								$dbname="hotel";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "SELECT email FROM Hotel.hotel";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        echo $row["email"];
								    }
								} else {
								    echo "0 results";
								}
								
								?></a></span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

    
    <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
    
		
	</body>
</html>