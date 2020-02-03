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
<td>
Name
</td>
<td>
<input class="form-control" type="text" name="name">
</td>
</tr>
<tr>
<td>
Roll no.
</td>
<td>
<input type="text" class="form-control" name="number">
</td>
</tr>
<tr>
<td>
Admsn no.
</td>
<td>
<input type="text" class="form-control" name="admno">
</td>
</tr>
<tr>
<td>
College
</td>
<td>
<input type="text" class="form-control" name="college">
</td>
</tr>
<tr>
<td></td>
<td>
<button class="btn btn-success" name="sbutton" type="submit">SUBMIT</button>
</td>
</tr>
</table>
</form>    
</body>
</html>
<?php
if(isset($_POST["sbutton"]))
 {
    $name=$_POST["name"];
    $roll=$_POST["number"];
    $admn=$_POST["admno"];
    $coll=$_POST["college"];
    
   echo "<table class='table'>
<tr>
<td>
Name
</td>
<td>
$name
</td>
</tr>
<tr>
<td>
Roll no.
</td>
<td>
$roll
</td>
</tr>
<tr>
<td>
Admsn no.
</td>
<td>
$admn
</td>
</tr>
<tr>
<td>
College
</td>
<td>
$coll
</td>
</tr>
</table>";

 }
?>
