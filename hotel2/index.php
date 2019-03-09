<html>
    <head>
         <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Frist Moblie Meta-->
        <title>Four Satr Hotal</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
         <link rel="stylesheet" href="css/animate.min.css">
        <!--<link rel="stylesheet" href="css/normalize.css"> */-->  <!-- �� ���� ��� ���� ������� �������-->
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
      <script src="js/html5shiv.min.js"></script> <!--����� ����� html5-->
      <script src="js/respond.min.js"></script>
    <!--[endif]-->
    </head>
    <body>
        
         <!--Start Nav -->
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.php">Hotal<br> <span>Four Star</span></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li ><a href="about.php">About</a></li>
                    <li ><a href="contact.php">Contact</a></li>
                    <li ><a href="room.php">Rooms</a></li>
					<li ><a href="rev.php">Reservation</a></li>
                  </ul>
                </div>
              </div>
            </nav>    
        <!-- End Nav -->
        
        <!-- Section 1-->
        <section class="header">
            <div class="header-op"></div>
             <div class="header-Text">
                 <p class="lead"> Amazing Services, Location & Facilities</p>
			</div>
    </section>
         <!--end Section 1-->
        
        
        
         <!-- Section 2-->
        <section  class="Home">
            <div class="container">
          <div class="row animated bounceInUp delay-2s">
            <div class="col-xs-6" class="Text_left" style="margin-top: 90px;">
                <h1 class="horror-text">Relax in our Hotel</h1>
                <p class="lead">Decorated in warm colors, rooms at the 4-star hotel feature an LCD TV with satellite channels and a DVD / CD player. Rooms also include a bathrobe and slippers, plus a seating area for relaxation.</p>
              </div>
            <div class="col-xs-6" class="img">
                <img src="images/intro_1.jpg">
                <img src="images/intro_2.jpg">
                <img src="images/intro_3.jpg">
            </div>
          </div>

        </div>
        </section>
         <!--end  Section 2-->
        
        <!--Section 4-->
        <div  >
        <a class="room"  class="row">Choose a Room</a>
        </div>
        <section class="room">
      
        	
      
        <div class="row" >
		
			 <?php 

        $conn = new mysqli("localhost", "root", "", "hotel");
        $sql = "SELECT Roomid,Type,Room_Price,image FROM Hotel.room where roomid<=3";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()){
                $rid[]= $row["Roomid"];
                $type[]=$row["Type"];
                $rprice[]=$row["Room_Price"];
                $images[]=$row["image"];
                
            }
            
            for ($i = 0; $i < 3; $i++) {
              
                echo'
              <div class="col-sm-4" class="div3" style="margin-top: 112px;">
                <div class="thumbnail">
                  <img src="'.   $images[$i] . '" alt="..." style="width: 100%;">
                    <div class="price">
                        <p><span>From'.   $rprice[$i].'</span> Night</p>
                    </div>
                  <div class="caption">
                    <h3><a href="./REv.php ';if($type[$i]==1){echo '" > single Room </a></h3>
                    <p class="lead">
                        A single room is a room intended for one person to stay in. Choose from twin or single rooms, all of which are comfortable.
                        
                     </p>
                      </div>
                    </div>
                  </div>';}
                elseif($type[$i]==2){echo '">Double Room </a></h3>
                    <p class="lead">
                       All rooms have double glazing, ensuring a calm and relaxing environment for our guests. Double rooms have a double bed (140cm).
          
                     </p>
                      </div>
                    </div>
                  </div>';}
                else {
                    echo  '">Multi Room</a> </h3>
                    <p class="lead">
                    For family or groub peoble Ensuring a calm and relaxing environment for our guests. Double rooms have a double bed.
                    
                     </p>
                      </div>
                    </div>
                  </div>';}
                   }
        }
                
                ?>
            </div>
           
        
    </section>
   <!-- end Section 4 -->
        
                        <!-- Section 5 -->
                    <section class="detilas_rom">
                    <div class="container">
                        <div class="row" style="margin-top: 120px;">
                            <div class="col-md-12">
                                    <div id="Carousel" class="carousel slide">
                                    <ol class="carousel-indicators">
                                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#Carousel" data-slide-to="1"></li>
                                        <li data-target="#Carousel" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">

                                    <div class="item active">
                                        <div class="row">
                                          <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/g1.jpg" alt="Image" style="max-width:100%;"></a></div>
                                          <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/gallery_1.jpg" alt="Image" style="max-width:100%;"></a></div>
                                          <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/g4.jpg" alt="Image" style="max-width:100%;"></a></div>
                                          <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/gallery_2.jpg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->
                                         <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/gallery_3.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/g2.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/g5.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/19225482_246782339139967_5200592443681382702_n.jpg" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/19225554_246782442473290_2139255635219147206_n.jpg" alt="Image" style="width:250px; height: 250px;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/19366106_246782122473322_3174672573577304974_n.jpg" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/19396925_246782419139959_4391716626736971541_n.jpg" alt="Image" style="width:250px; height: 250px;"></a></div>
                                            <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/rom/19399088_246782479139953_1137433892563862096_n.jpg" alt="Image" style="width:100%;height: 250px;"></a></div>
                                        </div><!--.row-->
                                    </div><!--.item-->
                                     </div><!--.carousel-inner-->
                                    </div><!--.Carousel-->

                            </div>
                        </div>
                    </div><!--.container-->
                        </section>
                      <!--        Section6-->

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
                                                    <input type="email" class="newsletter_input" placeholder="Searching" required="required">
                                                    <button class="newsletter_button"><span>Search</span></button>
                                                </form>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="newsletter_border_container">
                                            <div class="container">
                                                <div class="row border_row">
                                                    <div class="col">
                                                        <div class="newsetter_border">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                  </div>
                                    </div>
                                      <hr>

                                        <footer class="footer">
                                        <div class="container">
                                            <div class="row">

                                                <!-- Footer Logo -->
                                                <div class="col-lg-3 footer_col">
                                                    <div class="footer_logo_container">
                                                        <div class="footer_logo">
                                                            <a href="#" class="text-center">
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
                                                            <li><a href="index.php">Home</a></li>
                                                            <li><a href="about.php">About us</a></li>
                                                            <li><a href="rooms.php">Rooms</a></li>
                                                            <li><a href="contact.php">Contact</a></li>
                                                             <li><a href="REv.php">Reservatio</a></li>
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
