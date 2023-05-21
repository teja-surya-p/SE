<?php
include "db.php";
$sql = "SELECT * FROM `location`";
$run =  mysqli_query($conn,$sql);
$row = $run -> fetch_All(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CITIZEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="citizen.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
 
<body style="background: url('bg.jpg')">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            <a class="nav-link" href="contactus.html">CONTACT US</a>
            <a class="nav-link" href="aboutus.html">ABOUT US</a>
            <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
    </header>

        <div class="citizen">
        <div class="Tit">
             <span class="title">COMPLAINT REGISTRATION FORM</span>
             <div class="locationMenu">
                <form class="form1"action=" ">
                
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
                </form>
                <div class="Text">
                    <span class="Note">
                      <b>INFORMATION</b> 
                      </span>
                      <p class="Info">If you want to register a complaint you need to select location from statring point to destination 
                      and you need to submit your personal details like <b>DRIVING LISCENCE</b> and your <b>PAN CARD </b> at last you have to descibe your problem and post 
                      it with a video...
                      </p>
                      <div class="others">
                      <a class="my-button" title="Relevant Title" href="#">Show Response</a><a class="my-button" title="Relevant Title" href="#">LLR Registration Form</a>
                    </div>
                  </div>
              </div>
              <div class="form2">
                <span class="cf">
                  <b>REGISTER FOR THE COMPLAINT</b>
                </span>
                <form class="cf1" action="action.php" method="post" enctype="multipart/form-data">
                    <label class="names" >USERNAME:</label><br />
                    <input class="text" name="username" type="text" /><br />
                    <label class="names" for="mailid">ENTER WARD NUMBER:</label><br />
                    <input class="text" name="ward" type="text"  /><br />
                    <label class="names" for="city">SOURCE:</label><br />
                    <input class="text" name="s_city" type="text" /><br />
                    <label class="names" for="city">DESTINATION:</label><br />
                    <input class="text" name="d_city" type="text" /><br />
                    <label class="names" >UPLOAD DRIVING LICENSE</label><br />
                    <input  class="fil" name="dl" type="file" /><br />
                    <!-- <button class="buton" name="dlu">upload</button><br /> -->
                    <label class="names"  >ZIP FILE:</label><br />
                    <input class="fil" name="zip_file" type="file" /><br />
                    <!-- <button class="buton">upload</button><br /> -->
                    <label class="names">DESCRIPTION OF PROBLEM:</label><br />
                    <textarea name="des" placeholder="Enter your problem"></textarea><br />
                    <button class="button">
                      <input type="submit" name="ofRegister">
                    </button>
                </form>
              </div>
    </div>
    </div>

</body>
</html>