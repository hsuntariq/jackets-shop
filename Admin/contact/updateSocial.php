<?php
include '../config/connect.php';
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];
$google = $_POST['google'];
$pintrest = $_POST['pintrest'];
$linkedin = $_POST['linkedin'];

$insert = "UPDATE `contact_social` SET `facebook`='{$facebook}',`instagram`='{$instagram}',`twitter`='{$twitter}',`google`='{$google}',`pintrest`='{$pintrest}',`linkedin`='{$linkedin}'";
$result = mysqli_query($connection,$insert);
if($result){
    session_start();
    $_SESSION['success'] = 'Contacts successfully updated';
    header('Location: http://localhost/Client_project/Admin/contact/social_contact.php');
} else {
    session_start();
    $_SESSION['err'] = 'An Error Occured';
header('Location: http://localhost/Client_project/Admin/contact/social_contact.php');
}
?>