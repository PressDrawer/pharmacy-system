<?php
include 'includes/db.php';
session_start();
include 'includes/functions.php';
?>
<?php
include 'includes/header.php';
?>
<?php
$error='';
if (isset($_POST['submit'])) {
    $en_pw= md5($_POST['password']);
    $sql = "select * from member where email='$_POST[email]'";
    $raw_set = mysqli_query($conn, $sql);
    $raw = mysqli_fetch_assoc($raw_set);
    if($en_pw==$raw['password']){
        
        $_SESSION['id']= $raw['id'];
        redirect_to("profile_member.php");
    }
 else {
        $error="username or password is wrong";
    }
}
?>


<div class="container-fluid login_back">
    <div class="container ">
        <div class="col-md-4 col-md-offset-4 loginbox">
            <div class="col-md-12">
                <form action="login.php" method="post">


<?php echo $error;
?>
                    <input type="email" name="email" placeholder="Email" class="form-control log_c"> <br>

                    <input type="password" name="password" placeholder="Password" class="form-control log_c"> <br>


                    <input type="submit" class="btn btn-default" id="btnsub" name="submit" value="Login">
                    <br>

                    </div>
                </form>
            </div>
        </div>
    </div>


