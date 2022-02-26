<?php
session_start();
include 'config.php';
if(empty($_SESSION['userDetails'])){
    header('location:login.php');
}
?>
<div class="headings">
    <div style="margin-left:20px;">
    Macra Cloud CPanel
    </div>
</div>
<?php
include 'styles.html';
?>