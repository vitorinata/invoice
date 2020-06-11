<?php

include_once('config.php');

if(isset($_POST['add'])){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    

    $result =  mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name', '$email', '$mobile')");

    header("Location: index.php");

};
?>

<html>
<head>
    <title>Form Tambah Data</title>
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

    <h1>Tambah Data</h1>


    <form name="add_user" method="post" action="add.php" > 
        <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="InputEmail">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="InputMobile">Mobile</label>
            <input type="text" class="form-control" name="mobile">
        </div>
        
            <tr>
                <td><input class="btn btn-outline-dark" type="submit" value="submit" name="add"></td>

            </tr>
        </table>
    </form>
</body>
</html>