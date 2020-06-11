<?php
    require_once('config.php');
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "delete from users where id='$id'");
    header('Location: index.php');
?>