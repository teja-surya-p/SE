<?php
include "db.php";
if(isset($_POST["fetch"])){
  
  $src=$_POST['To'];
  $des=$_POST['Des'];
  $sql = "SELECT * FROM `complaints` WHERE `source`='$src' AND `destination`='$des'";
  $run =  mysqli_query($conn,$sql);
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
    <section>
        <?php
            while($c=mysqli_fetch_array($run)){
            ?>
            <div>
            <hr>
            <?php echo $c['username']; ?><br>
            <?php echo $c['ward_number']; ?><br>
            <?php echo $c['source']; ?><br>
            <?php echo $c['destination']; ?><br>
            <img src="<?php echo $c['dl']; ?>" alt="Driving License" style="width: 300px; height: 300px;"><br>
            <a href="<?php echo $c['evidence']; ?>"><?php echo $c['evidence']; ?></a><br>
            <?php echo $c['complaint_brief']; ?></td><br>
            </div>
            <?php
            }}
            ?>
        </tbody>
        </table>
    </section>
</body>
</html>
