<?php
    session_start();
    
    
    

?>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Frist Moblie Meta-->
        <title>Rome Pages</title>
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
        <li ><a href="Room.php">Rooms</a></li>
		<li ><a href="REv.php">Reservation</a></li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
        <section class="header-room">
            <div class="header-op-room"></div>
              <div class="header-Text-room">
                 <p class="lead"> Rooms</p>
            </div>
            <form action="" method="post">
			<div class="container">
        
               <div class="input" class="control">
			
<select  name="status">
<option >   </option>
<option value="1">Room valid </option>
<option value="2"> Room not valid</option>
</select>
<input type="submit" name="done">done
</div>
			</div>
</form>

				
    </section>
        <section  class="room" class="row" >
         <div >
        <a   >Choose a Room</a>
        </section>
        </div>
        <section class="room">
      
        	
      
        <div class="row" >
		
		<?php 
        
        $conn = new mysqli("localhost", "root", "", "hotel");
        if (isset($_POST['done'])) {
            
            
            if(isset($_POST['status'])){
                $select1 = $_POST['status'];
                if ( $select1=="1"){
        $sql = "SELECT Roomid,Type,Room_Price,image FROM Hotel.room where status=2";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()){
                $rid[]= $row["Roomid"];
                $type[]=$row["Type"];
                $rprice[]=$row["Room_Price"];
                $images[]=$row["image"];
                
            }
            
            $count=0;
            for ($i = 0; $i <sizeof($rid); $i++) {
             
                
                
                echo'
              <div class="col-sm-4" class="div3" style="margin-top: 112px;">
                <div class="thumbnail">
                  <img src="'.   $images[$i] . '" alt="..." style="width: 100%;">
                    <div class="price">
                        <p><span>From'.   $rprice[$i].'</span> Night</p>
                    </div>
                  <div class="caption">
                    <h3><a href="./reser.php"';if($type[$i]==1){echo '> single Room </a></h3>
                    <p class="lead">
                        A single room is a room intended for one person to stay in. Choose from twin or single rooms, all of which are comfortable.
                        
                     </p>
                      </div>
                    </div>
                  </div>';
                $_SESSION['rid'] = $rid[$i];}
                elseif($type[$i]==2){$_SESSION['rid1'] = $rid[$i];echo '>Double Room </a></h3>
                    <p class="lead">
                       All rooms have double glazing, ensuring a calm and relaxing environment for our guests. Double rooms have a double bed (140cm).
          
                     </p>
                      </div>
                    </div>
                  </div>';}
                else {$_SESSION['rid2'] = $rid[$i];
                    echo '>Multi Room</a> </h3>
                    <p class="lead">
                    For family or groub peoble Ensuring a calm and relaxing environment for our guests. Double rooms have a double bed.
                    
                     </p>
                      </div>
                    </div>
                  </div>';}
                    $count++;
                    if ($count==3) {
                        $count=0;
                        echo ' </div>
           
        
                </section>
        <section class="room">
        
        <div class="row" >';
                    }
                   }
        }
                
                echo '
            </div>
           
    </section>';}
                else{
                    
                    $sql = "SELECT Roomid,Type,Room_Price,image FROM Hotel.room where status=1";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()){
                            $rid[]= $row["Roomid"];
                            $type[]=$row["Type"];
                            $rprice[]=$row["Room_Price"];
                            $images[]=$row["image"];
                            
                        }
                        $count=0;
                        for ($i = 0; $i <sizeof($rid); $i++) {
                            
                            echo'
              <div class="col-sm-4" class="div3" style="margin-top: 112px;">
                <div class="thumbnail">
                  <img src="'.   $images[$i] . '" alt="..." style="width: 100%;">
                    <div class="price">
                        <p><span>From'.   $rprice[$i].'</span> Night</p>
                    </div>
                  <div class="caption">
                    <h3><a href="./REv.php"';if($type[$i]==1){echo '> single Room </a></h3>
                    <p class="lead">
                        A single room is a room intended for one person to stay in. Choose from twin or single rooms, all of which are comfortable.
                  
                     </p>
                      </div>
                    </div>
                  </div>';}
                            elseif($type[$i]==2){echo '>Double Room </a></h3>
                    <p class="lead">
                       All rooms have double glazing, ensuring a calm and relaxing environment for our guests. Double rooms have a double bed (140cm).
                        
                     </p>
                      </div>
                    </div>
                  </div>';}
                            else {
                                echo '>Multi Room</a> </h3>
                    <p class="lead">
                    For family or groub peoble Ensuring a calm and relaxing environment for our guests. Double rooms have a double bed.
                    
                     </p>
                      </div>
                    </div>
                  </div>';}
                                $count++;
                                if ($count==3) {
                                    $count=0;
                                    echo ' </div>
                        
                        
                </section>
        <section class="room">
                        
        <div class="row" >';
                                }
                        }
                    }
                    
                    echo '
            </div>
                            
    </section>';}
                }
        }
        ?>
                    
                
        
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
							<input type="email" class="newsletter_input"  required="required" value=" <?php $servername="localhost";
								$username="root";
								$password="";
								$dbname="hotel";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "SELECT count(RoomID) FROM Hotel.Room where status='1'";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        echo $row['count(RoomID)'];
								    }
								} else {
								    echo "0 results";
								}?> Room is availables">
							<button class="newsletter_button"><span>counter</span></button>
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
							<li><a href="about.phpl">About us</a></li>
							<li><a href="room.php">Rooms</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="REv.php">Reservation</a></li>
							
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