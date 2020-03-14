<?php
include("header.php");
    $user = 'moseti zachary';
    echo $user;
    // unset function deletes the variable-code will throw an error
    unset($user);
    echo $user;
    // unlink function deletes a file
    $del_file = "header.php";
    unlink($del_file);

?>