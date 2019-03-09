 <?php
$conn = new mysqli("localhost", "root", "", "hotel");


if (isset($_POST["button1"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $Pname=$_POST["pNO"];
    $ename=$_POST["email"];
    $adname=$_POST["adress"];
    
    
    $sql = "INSERT INTO Hotel.client (email,Phone_number,First_name,Last_name,adress) VALUES ('$ename','$Pname', '$fname','$lname','$adname')";
    
    $result = $conn->query($sql);
}


?>
<html>
    <head>
         <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Frist Moblie Meta-->
        <title>Four Satr Hotal</title>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
         <link rel="stylesheet" href="css/animate.min.css">
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
         <link rel="stylesheet" href="css/Rev.css"/>
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/star-rating.js" type="text/javascript"></script>
        <!--[if lt IE 9]-->
      <script src="js/html5shiv.min.js"></script> <!--ÈÊÚÑÝ ÚäÇÕÑ html5-->
      <script src="js/respond.min.js"></script>
    <!--[endif]-->
    </head>
    <body>
        <div class="world">
  <div class="box">
    <div class="plane1">
      <div class="heart"></div>
    </div>
    <div class="plane2">
      <div class="heart"></div>
    </div>
  </div>
  <div class="box">
    <div class="plane1">
      <div class="heart"></div>
    </div>
    <div class="plane2">
      <div class="heart"></div>
    </div>
  </div>
  <div class="box">
    <div class="plane1">
      <div class="heart"></div>
    </div>
    <div class="plane2">
      <div class="heart"></div>
    </div>
  </div>
  <div class="box">
    <div class="plane1">
      <div class="heart"></div>
    </div>
    <div class="plane2">
      <div class="heart"></div>
    </div>
  </div>
  <div class="box">
    <div class="plane1">
      <div class="heart"></div>
    </div>
    <div class="plane2">
      <div class="heart"></div>
    </div>
  </div>


</div>
		<section class="Rev">
			<div class="container">
			<div class="form">
				<form class="login-form" action=" " method="post">
					<input type="text"  name='fname' placeholder="First Name">
					<input type="text"  name='lname' placeholder="Last Name">
				
					<input type="text"  name='pNO' placeholder="Phone Number">
				
					<input type="text" name='email' placeholder="Email">
				
					<input type="text" name='adress'placeholder="Address">
				
					 <button class="btn-link" type="submit" name="button1" style="height:50px; :">Done</button>
					<br>
					 <button class="btn-link" type="submit" name="button2" style="margin-top: 2px;height:50px; :">cancel</button>
   
					
				
				
				
				</form>
			</div>
			</div>
		</section>
	


        
        
        
        
        
        
        
          
      <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
          
    </body>
</html>