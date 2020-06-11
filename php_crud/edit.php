<?php

include_once('config.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $result =  mysqli_query($mysqli, "Update users SET name='$name', email='$email', mobile='$mobile' where id ='$id' ");
    header("Location: index.php");
};
?>
<?php
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "select * from users where id='$id'");
    while($user_data = mysqli_fetch_array($result)){
        $name = $user_data['name'];
        $email = $user_data['email'];  
        $mobile = $user_data['mobile']; 
    } 
?>

<html>
<head>
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    body {
        margin-bottom: 20px;
        width: 500px;
        margin: 0 auto;
        margin-top: 50px;
    }

    .form-control {
        border-color: black;
    }

    h1{
        text-align: center;
    }
</style>
<body>
    <h1>Edit Form MySQL</h1>
    <form name="update_user" method="post" action="edit.php">
        <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" name="name" value="<?=$name?>">
        </div>
        <div class="form-group">
            <label for="InputEmail">Email</label>
            <input type="text" class="form-control" name="email" value="<?=$email?>">
        </div>
        <div class="form-group">
            <label for="InputMobile">Mobile</label>
            <input type="text" class="form-control" name="mobile" value="<?=$mobile?>">
        </div>
        <div class="form-group">
            <label for="InputID">ID</label>
            <input type="text" class="form-control" name="id" value="<?=$id?>">
        </div>
            <tr>
                <td><input class="btn btn-outline-dark" type="submit" value="submit" name="update"></td>
            </tr>
    </form>
</body>
</html>