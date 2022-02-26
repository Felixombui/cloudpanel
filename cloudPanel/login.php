<?php
include 'config.php';
if(isset($_POST['login'])){
    $username=addslashes($_POST['username']);
    $password=addslashes($_POST['password']);
    $encpass=md5($password,false);
    $loginqry=mysqli_query($config,"SELECT * FROM customers WHERE username='$username' AND password='$encpass'");
    if(mysqli_num_rows($loginqry)>0){
        $loginrow=mysqli_fetch_assoc($loginqry);
        session_start();
        $_SESSION['id']=$loginrow['id'];
        $_SESSION['userDetails']=$loginrow['firstname'].' '.$loginrow['othernames'];
        header('location:index.php');
    }else{
        $err='Wrong username ad password combination!';
    }
}
?>
<div class="loginform">
    <form action="" method="post">
        <table width="40%">
            <tr><td align="center"><img src="images/macracloud.png" width="80" height="100"></td></tr>
            <tr><td><input type="text" name="username" placeholder="Enter your username" required="required"></td></tr>
            <tr><td><input type="password" name="password" placeholder="Enter your password" required="required"></td></tr>
            <tr><td><input type="submit" name="login" Value="Login"></td></tr>
            <tr><td><a href="recover.php">Forgot your password? </a>| New here? <a href="signup.php">Join us</a></td></tr>
    </table>
    <table width="40%"><tr><td><?php echo $err ?></td></tr></table>
    </form>
</div>
<?php
include 'styles.html';
?>