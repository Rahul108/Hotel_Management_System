<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Hotel Escober</title>
	<link rel="stylesheet" href="../css/style.css">
</head>


<body>


<div class="Login">
<a href="../login/login_admin.php">Admin Login</a>
<a href="../login/login_user.php">User Login</a>
<a href="../login/registration.php">Registration</a>
</div>



<div class="heading">
<img src="../img/title.jpg"/>
</div>


<div class="navigation">
   <a href="../index.php">Home</a>
   <a href="../room/room.php">Room</a>
   <a href="food.php">Food</a>
   <a href="../facilities/facilities.php">Facilities</a>
    <a href="../about/about.php">About</a>
   <a href="../contact/contact.php">Contact</a>
</div>



<div class="body_1">
<div class="lg_date">
<h3>
 <script language="javascript">
 var today = new Date();
 document.write(today);
 </script>
 </h3>
</div>
</div>




<div class="body_2">
  	
  <div class = "room_border">  
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Hot Deli Sub" class = "squaredTwo"><h2>1.Hot Deli Sub</h2></p>
  <img src="../img/Lunch/Hot Deli Sub.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Hot Deli Sub' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Breaded Pork Tenderloin" class = "squaredTwo"><h2>2.Breaded Pork Tenderloin</h2></p>
  <img src="../img/Lunch/Breaded Pork Tenderloin.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Breaded Pork Tenderloin' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt"/>
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Italian Meatball Hoagie" class = "squaredTwo"><h2>3.Italian Meatball Hoagie</h2></p>
  <img src="../img/Lunch/Italian Meatball Hoagie.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Italian Meatball Hoagie' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>




  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Pan Fried Canadian Walleye" class = "squaredTwo"><h2>4.Pan Fried Canadian Walleye</h2></p>
  <img src="../img/Lunch/Pan Fried Canadian Walleye.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Pan Fried Canadian Walleye' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Pan Fried Walleye" class = "squaredTwo"><h2>5.Pan Fried Walleye</h2></p>
  <img src="../img/Lunch/Pan Fried Walleye.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Pan Fried Walleye' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt"/>
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Prime Rib Sandwich" class = "squaredTwo"><h2>6.Prime Rib Sandwich</h2></p>
  <img src="../img/Lunch/Prime Rib Sandwich.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Prime Rib Sandwich' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


   
  <div class = "room_border"> 
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Chicken Cordon Bleu" class = "squaredTwo"><h2>7.Chicken Cordon Bleu</h2></p>
  <img src="../img/Lunch/Chicken Cordon Bleu.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Chicken Cordon Bleu' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>
   


  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Coconut Pineapple Curry Chicken" class = "squaredTwo"><h2>8.Coconut Pineapple Curry Chicken</h2></p>
  <img src="../img/Lunch/Coconut Pineapple Curry Chicken.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Coconut Pineapple Curry Chicken' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>
   


  <div class = "room_border">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Roast Barbecued Pork Loin" class = "squaredTwo"><h2>9.Roast Barbecued Pork Loin</h2></p>
  <img src="../img/Lunch/Roast Barbecued Pork Loin.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Roast Barbecued Pork Loin' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


  
  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Stir Fried Pepper Beef" class = "squaredTwo"><h2>10.Stir Fried Pepper Beef</h2></p>
  <img src="../img/Lunch/Stir Fried Pepper Beef.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Stir Fried Pepper Beef' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


  
  <div class = "room_border">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Tender Beef Medallions" class = "squaredTwo"><h2>11.Tender Beef Medallions<h2></p>
  <img src="../img/Lunch/Tender Beef Medallions.jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Tender Beef Medallions' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet A(Lunch)" class = "squaredTwo"><h2>12.Buffet A(Lunch)</h2><h3>(Meatloaf,Baked Garlic Spicy Chicken,Roast Barbecue Pork Loin,Italian Sausage Lasagna,Mexican Casserole with your choice of chicken or beef.)</h3></p>
  <img src="../img/Lunch/Buffet A(Lunch).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Buffet A(Lunch)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>





  <div class = "room_border">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet B(Lunch)" class = "squaredTwo"><h2>13.Buffet B(Lunch)</h2><h3>(Stroganoff,Stuffed Chicken Parmesan,Apple Cinnamon Pork Loin,Curried Coconut Pineapple Chicken,Tilapia Au Gratin,Ham Dijon)</h3></p>
  <img src="../img/Lunch/Buffet B(Lunch).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Buffet B(Lunch)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>



  <div class = "room_border_1">
  <form action = "process_lunch.php" method="POST">
  <p><input type="checkbox" name="selection" value="Buffet C(Lunch)" class = "squaredTwo"><h2>14.Buffet C(Lunch)</h2><h3>(Stuffed Chicken Cordon Bleu,Top Sirloin with Burgundy Mushrooms,Sweet and Sour Shrimp Stir Fry,Mango Pork,Tenderloin Medallions,Seafood Enchiladas)</h3></p>
  <img src="../img/Lunch/Buffet C(Lunch).jpg">
  <p>Price: <?php $rr = mysql_query("SELECT * FROM food_lunch WHERE name ='Buffet C(Lunch)' "); $rr_row = mysql_fetch_array($rr); echo "".$rr_row['price'];  ?>/plate</p>
  <p>
  <input type="number" name="number" min=0 value="0" class = "opt" />
  </p>
  <p><input type="submit" name="submit" value="ORDER" class = "submt"></p>
  </form>
  </div>


</div>

</body>
</html>