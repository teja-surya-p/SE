<?php
include "db.php";

#complaint form

if(isset($_POST['ofRegister'])){
    echo "Hai";
    print_r($_POST);
    if(isset($_POST['username']) && isset($_POST['ward']) && isset($_POST['s_city']) && isset($_POST['d_city']) && isset($_FILES['dl']) && isset($_FILES['zip_file']) && isset($_POST['des'])){
        $username = $_POST['username'];
        $ward_num = $_POST['ward'];
        $s_city = $_POST['s_city'];
        $d_city = $_POST['d_city'];
        $zip_file = $_FILES['zip_file']['name'];
        $target_comp = "complaints/".basename($zip_file);
        move_uploaded_file($_FILES['zip_file']['tmp_name'], $target_comp);
        $dl = $_FILES['dl']['name'];
        $target_dl = "dl/".basename($dl);
        move_uploaded_file($_FILES['dl']['tmp_name'], $target_dl);
        $problem=$_POST['des'];
        $sql = "INSERT INTO `complaints`(`username`, `ward_number`, `source`, `destination`, `dl`, `evidence`, `complaint_brief`) VALUES  ('$username','$ward_num','$s_city','$d_city','$target_dl','$target_comp','$problem')";
        $run =  mysqli_query($conn,$sql);
        if($run){
            echo "<script>alert('Complaint sent sucessfully'); window.location = 'citizen.php';</script>";
        }
    }
    else{
        echo "<script>alert('please give all details ok'); window.location = 'citizen.php';</script>";
    }
}

#register for officer and citizen

if(isset($_POST['Register'])){
    echo "Hai";
    if(isset($_POST['username']) && isset($_POST['age']) && isset($_POST['mail']) && isset($_POST['number']) && isset($_POST['pass']) && isset($_POST['cpass']) ){
        $username = $_POST['username'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
        $number = $_POST['number'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $profile = $_FILES['profile']['name'];
        $target_profile = "profileimage/".basename($profile);
        move_uploaded_file($_FILES['profile']['tmp_name'], $target_profile);
        $adhar = $_FILES['adhar']['name'];
        $target_adhar = "adharimage/".basename($adhar);
        move_uploaded_file($_FILES['adhar']['tmp_name'], $target_adhar);
        if($pass!=$cpass){
            echo "<script>alert('password and conform passwords are different please provide correctly'); window.location='officerr.html'</script>";
        }
        else{
            $sql = "insert into citizen(username,age,email,mobile,password) values('$username','$age','$mail','$number','$pass')";
            $run =  mysqli_query($conn,$sql);
            if($run){
                echo "<script>alert('Your account has been created sucessfully'); window.location = 'home.html';</script>";
            }
        }
        
        echo $username,$age, $mail, $number, $pass, $cpass;

    }
    else{
        echo "<script>alert('please give all details'); window.location='citizenform.html'</script>";
    }
}


if(isset($_POST['officerRegister'])){
    echo "Hai";
    if(isset($_POST['username']) && isset($_POST['age']) && isset($_POST['mail']) && isset($_POST['number']) && isset($_POST['pass']) && isset($_POST['cpass']) ){
        $username = $_POST['username'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
        $number = $_POST['number'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $profile = $_FILES['profile']['name'];
        $target_profile = "profileimage/".basename($profile);
        move_uploaded_file($_FILES['profile']['tmp_name'], $target_profile);
        $adhar = $_FILES['adhar']['name'];
        $target_adhar = "adharimage/".basename($adhar);
        move_uploaded_file($_FILES['adhar']['tmp_name'], $target_adhar);
        if($pass!=$cpass){
            echo "<script>alert('password and conform passwords are different please provide correctly'); window.location='officerr.html'</script>";
        }
        else{
            $sql = "insert into officer(username,age,email,mobile,password) values('$username','$age','$mail','$number','$pass')";
            $run =  mysqli_query($conn,$sql);
            if($run){
                echo "<script>alert('Your account has been created sucessfully'); window.location = 'home.html';</script>";
            }
        }
        
        echo $username,$age, $mail, $number, $pass, $cpass;

    }
    else{
        echo "<script>alert('please give all details yes'); window.location='citizenform.html'</script>";
    }
}


#login

if (isset($_POST['login'])){
    if( isset($_POST['email']) && isset($_POST['pass'])){
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "select * from citizen where email = '$mail' and password = '$pass'";
        $sql2 = "select * from officer where email = '$mail' and password = '$pass'"; 
        $run = mysqli_query($conn,$sql);
        $run2 = mysqli_query($conn,$sql2);
        if(mysqli_num_rows($run)>0){
            $check = mysqli_fetch_array($run);
            $_SESSION['cid']  = $check['cid'];
            header('Location:citizen.php');
        }
        if(mysqli_num_rows($run2)>0){
            $check = mysqli_fetch_array($run2);
            $_SESSION['oid']  = $check['oid'];
            header('Location:officer.php');
        }
        else{
            echo "<script>alert('the username or password is incorret please try again'); window.location='home.html'</script>";
        }
    }
    else{
        echo "<script>alert('please give all details'); window.location='home.html'</script>";
    }
}

?>