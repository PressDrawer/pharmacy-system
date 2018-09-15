<?php
include 'includes/db.php';
?>
<?php
if(isset($_POST['submit'])){
    $en_pw= md5($_POST['password']);
   $sql="INSERT INTO member (fname, lname, email, password)
VALUES ('$_POST[f_name]', '$_POST[l_name]', '$_POST[email]', '$en_pw')";
   mysqli_query($conn, $sql);
}

?>
<?php
include 'includes/header.php';
?>

<div class="container-fluid form_back">
    <div class="container ">
        <div class="col-md-6 col-md-offset-3">
            <form action="register.php" method="post">

                First name <br>
                <input type="text" name="f_name" class="form-control regi_c"> <br>
                Last name <br>
                <input type="text" name="l_name" class="form-control regi_c"> <br>
                E mail <br>
                <input type="email" name="email" class="form-control regi_c"> <br>
                Password <br>
                <input type="password" name="password" class="form-control regi_c"> <br>
                <br>
                <div class="col-md-4 col-md-offset-4">
                    <input type="submit" class="btn btn-default" id="btnsub" name="submit" value="Submit">
                <br>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>