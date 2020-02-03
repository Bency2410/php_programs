<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
<table class="table">
    <tr>
    <td>Name</td>
    <td><input type="text" class="form-control" name="name"></td>
    </tr>
    <tr>
    <td>Place</td>
    <td><input type="text" class="form-control" name="place"></td>
    </tr>
    <tr>
    <td>E-mail id</td>
    <td><input type="email" class="form-control" name="email"></td>
    </tr>
    <tr>
    <td>DOB</td>
    <td><input type="date" class="form-control" name="date"></td>
    </tr>
    <tr>
    <td>Phone no</td>
    <td><input type="text" class="form-control" name="phone"></td>
    </tr>
    <tr>
    <td>Age</td>
    <td><input type="number" class="form-control" name="age"></td>
    </tr>
    <tr>
    <td>Username</td>
    <td><input type="text" class="form-control" name="username"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" class="form-control" name="pswd"></td>
    </tr>
    <tr>
    <td>Confirm Password</td>
    <td><input type="password" class="form-control" name="cpswd"></td>
    </tr>
    <tr>
    <td><button class="btn btn-primary" type="reset" name="reset" >Reset</button></td>
    <td><button class="btn btn-success" type="submit" name="subbutton">SUBMIT</button></td>
    </tr>
    </table>
</form>
</body>
</html>

<?php
if(isset($_POST["subbutton"]))
{
    $name=$_POST["name"];
    $place=$_POST["place"];
    $emailid=$_POST["email"];
    $birthdate=$_POST["date"];
    $phoneno=$_POST["phone"];
    $age=$_POST["age"];
    $user=$_POST["username"];
    $pass=$_POST["pswd"];
    $confirm=$_POST["cpswd"];
    echo $name;
    echo "<br>";
    echo $place;
    echo "<br>";
    echo $emailid;
    echo "<br>";
    echo $birthdate;
    echo "<br>";
    echo $phoneno;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $user;
    echo "<br>";
    echo $pass;
    echo "<br>";
    echo $confirm;
}
?>