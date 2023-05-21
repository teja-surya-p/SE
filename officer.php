<?php
include "db.php";
$sql = "SELECT * FROM `location`";
$run =  mysqli_query($conn,$sql);
$row = $run -> fetch_All(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="officer.css">
</head>
<body>
  <?php 
  ?>
    <div class="navbar">
        <div class="logo"><i class="fas fa-meteor fa-2x"></i>Logo</div>
        <ul class="menu">
            <li><a href="/index.html">Home</a></li>
            <li><a href="/products.html">Services</a></li>
            <li><a href="/about.html">About</a></li>
            <li><a href="/contact.html">Contact</a></li>
        </ul>
      
        <ul class="login-menu">
            <li>Logout</li>
        </ul>
      </div>
      <div class="locationMenu">
        <form class="form1" method="POST" action="complaints.php">
        STARTING POINT:
        <select class="sp" name="To" id="To">
          <?php
            foreach ($row as $city) {
            ?>
              <option value="<?php echo $city['area'];?>" selected="selected"><?php echo $city['area'];?></option>
            <?php
            }
          ?>
        </select>
        DESTINATION :
        <select class="ds" name="Des" id="Des">
          <?php
          foreach ($row as $city) {
              ?>
                <option value="<?php echo $city['area'];?>" selected="selected"><?php echo $city['area'];?></option>
              <?php
              }
              ?>
        </select>
        <div class="button">
              <input type="submit" name="fetch">
        </div>
        </form>
</body>
</html>