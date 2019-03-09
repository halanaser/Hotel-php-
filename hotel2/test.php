
 <?php
 session_start();
 $conn = new mysqli("localhost", "root", "", "hotel");
 $fname='h';
 $lname='fg';
 $Pname='1234';
 $ename='ddgfgh';
 $adname='fgghj';
 
 
 $sql = "UPDATE Hotel.client SET email=".$ename.",Phone_number=".$Pname.",First_name=".$fname.",Last_name=".$lname.",adress=".$adname."where clientid=2";
 
 $result = $conn->query($sql);
 if( $conn->query($sql))
     echo "sucess";

 ?>