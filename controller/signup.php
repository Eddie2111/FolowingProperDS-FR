<?php

include("../model/dbconfig.php");

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($password!=$cpassword){
    echo "Passwords do not match";
    header( "refresh:2;url=../view/register.php" );
}


?>




<?php
#else{
#    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
#    $result = mysqli_query($conn, $sql);
#    if ($result){
#        echo "Success";
#    }
#    else{
#        echo "Error";
#    }
# }

?>