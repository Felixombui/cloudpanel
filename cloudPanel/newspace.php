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
    <div class="spaceads"><B>Free Space</B><P>
        <table style="width:95%" align="center">
        <tr><td>Disk Space</td><td>1 GB</td></tr>
        <tr><td>File Hosting</td><td><img src="images/icons/tick.ico" width="20" height="20" align="center"></td></tr>
        <tr><td>Free Emails</td><td><img src="images/icons/x.ico" width="20" height="20" align="center"></td></tr>
        <tr><td>Web hosting</td><td><img src="images/icons/x.ico" width="20" height="20" align="center"></td></tr>
        <tr><td>File Hosting</td><td><img src="images/icons/x.ico" width="20" height="20" align="center"></td></tr>
    </table>
    </P>
    <button class="acceptbutton">Purchase</button>
</div>
    <div class="spaceads">Bronze</div>
    <div class="spaceads">Silver</div>
    <div class="spaceads">Gold</div>
</div>