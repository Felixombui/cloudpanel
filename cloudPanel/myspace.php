<?php
include 'headers.php';
$userdetails=$_SESSION['userDetails'];
$userid=$_SESSION['id'];
$spaceqry=mysqli_query($config,"SELECT * FROM customerspace WHERE userid='$userid'");
?>
<div class="menu">
    <table width="100%">
        <tr><td align="center">
        <div align="center" class="profilearea" style="margin-top: 10px;">
        <img src="images/user.png" width:80%, height="80%" style="margin-top: 5px;">
        </div>
        </td></tr>
        <tr><td align="center"><?php echo '<a href="profile.php" style="background-color:pink; color:blue;">'.$userdetails.'</a>' ?></td></tr>
        
    </table>
    <table width="90%" align="center">
        <tr><td style="background-color: purple; padding: 5px;">
        <img src="images/home.png" height="23" width="23" align="left"><a href="index.php">Home</a>
        </td></tr>
        <tr><td style="background-color: purple; padding: 5px;">
        <img src="images/sell.png" height="23" width="23" align="left"><a href="myspace.php">My Space</a>
        </td></tr>
        <tr><td style="background-color: purple; padding: 5px;">
        <img src="images/admin.png" height="23" width="23" align="left"><a href="profile.php">My Account</a>
        </td></tr>
    </table>
  
</div>

<div class="bigbody">
    <?php
        if(mysqli_num_rows($spaceqry)>0){
            echo '<table><tr><th>Size</th><th>Date</th><th>Status</th></tr>';
            while($spacerow=mysqli_fetch_assoc($spaceqry)){
                echo '<tr><td>'.$spacerow['spacesize'].'</td><td>'.$spacerow['creationdate'].'</td><td>'.$spacerow['status'].'</td></tr>';
            }
            echo '</table>';
        }else{
            echo '<div style="margin-top:20%; text-align:center;"><img src="images/sell.png" width="80" height="80"><br>You have not acquired any space yet! <a href="newspace.php">Click here to acquire</a></div>';
        }
    ?>
</div>