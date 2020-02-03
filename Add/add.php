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
   Operand 1
   </td>
   <td>
   <input type="text" class="form-control" name="op1"> 
   </td>
   </tr>
   <tr>
   <td>
   Operand 2
   </td>
   <td>
   <input type="text" class="form-control" name="op2">
   </td>
   </tr>
   <tr>
   <td></td>
   <td>
   <button class="btn btn-success" name="btnsub" type="submit">
   Submit
   </button>
   </td>
   </tr>
   </table> 
   </form>
</body>
</html>

<?php
if(isset($_POST["btnsub"]))
{
    $oper1=$_POST["op1"];
    $oper2=$_POST["op2"];
    $sum=$oper1+$oper2;
    echo "<table class='table'>
    <tr> <td> Output: </td>
         <td> $sum </td>
    </tr>
    </table>";

}
?>