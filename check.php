<?php
session_start();
include_once './connect.php';
if(isset($_SESSION['send'])) {
    $myusername = $_POST['u'];
    $mypassword = $_POST['p'];
    $sql = "select * from $tbl_name WHERE username='$myusername' and password='$mypassword'";
//$result=mysqli_query($sql);
    $result = $db->query($sql);
    $count = $result->num_rows;
    if ($count == 1) {
        header("location:sucsses.php");
    } else {
        echo "wrong username and password!!";

    }
}

?>