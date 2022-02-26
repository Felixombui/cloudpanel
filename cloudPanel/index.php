<?php
include 'headers.php';
$userdetails=$_SESSION['userDetails'];
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
    <div class="bodymenu"><a href="myspace.php"><img src="images/sell.png" width="80" height="80"><br> My Space</a></div>
    <div class="bodymenu"><a href="profile.php"><img src="images/admin.png" width="80" height="80"><br> My Account</a></div>
    <div class="bodymenu"><a href="myspace.php"><img src="images/newitem.png" width="80" height="80"><br> Folders and files</a></div>
</div>