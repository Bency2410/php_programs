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
            <tr><td>Name</td>
            <td><input type="text" class="form-control" name="name"></td>
            </tr>
            <tr><td>Semester</td>
            <td><input type="text" class="form-control" name="sem"></td>
            </tr>
            <tr><td>Exam code</td>
            <td><input type="text" class="form-control" name="code"></td>
            </tr>
            <tr><td>Subject 1</td>
            <td><input type="text" class="form-control" name="S1"></td>
            </tr>
            <tr>
            <td>Mark obtained</td>
            <td><input type="number" class="form-control" name="S1MO"></td>
            </tr>
            <tr>
            <td>Total Mark</td>
            <td><input type="number" class="form-control" name="S1TM"></td>
            </tr>
            <tr><td>Subject 2</td>
            <td><input type="text" class="form-control" name="S2"></td>
            </tr>
            <tr>
            <td>Mark obtained</td>
            <td><input type="number" class="form-control" name="S2MO"></td>
            </tr>
            <tr>
            <td>Total Mark</td>
            <td><input type="number" class="form-control" name="S2TM"></td>
            </tr>
            <tr><td>Subject 3</td>
            <td><input type="text" class="form-control" name="S3"></td>
            </tr>
            <tr>
            <td>Mark obtained</td>
            <td><input type="number" class="form-control" name="S3MO"></td>
            </tr>
            <tr>
            <td>Total Mark</td>
            <td><input type="number" class="form-control" name="S3TM"></td>
            </tr>
            <tr><td>Subject 4</td>
            <td><input type="text" class="form-control" name="S4"></td>
            </tr>
            <tr>
            <td>Mark obtained</td>
            <td><input type="number" class="form-control" name="S4MO"></td>
            </tr>
            <tr>
            <td>Total Mark</td>
            <td><input type="number" class="form-control" name="S4TM"></td>
            </tr>
            <tr>
            <td></td>
            <td><button class="btn btn-success" name="btn" type="submit">Generate Marklist</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $name=$_POST["name"];
    $sem=$_POST["sem"];
    $ecode=$_POST["code"];
    $s1n=$_POST["S1"];
    $s1mo=$_POST["S1MO"];
    $s1tm=$_POST["S1TM"];
    $s2n=$_POST["S2"];
    $s2mo=$_POST["S2MO"];
    $s2tm=$_POST["S2TM"];
    $s3n=$_POST["S3"];
    $s3mo=$_POST["S3MO"];
    $s3tm= $_POST["S3TM"];
    $s4n=$_POST["S4"];
    $s4mo=$_POST["S4MO"];
    $s4tm=$_POST["S4TM"];

    $s1p = ( $s1mo / $s1tm) * 100;
    $s2p = ( $s2mo / $s2tm) * 100;
    $s3p = ( $s3mo / $s3tm) * 100;
    $s4p = ( $s4mo / $s4tm) * 100;



    if($s1p>80)
     $s1g = 'A';
    elseif ($s1p > 60) {
        $s1g = 'B';
    }
    elseif ($s1p > 40) {
        $s1g = 'C';
    }
    else $s1g = 'F';

    if($s2p>80)
    $s2g = 'A';
   elseif ($s2p > 60) {
       $s2g = 'B';
   }
   elseif ($s2p > 40) {
       $s2g = 'C';
   }
   else $s2g = 'F';

   if($s3p>80)
     $s3g = 'A';
    elseif ($s3p > 60) {
        $s3g = 'B';
    }
    elseif ($s3p > 40) {
        $s3g = 'C';
    }
    else $s3g = 'F';

    if($s4p>80)
    $s4g = 'A';
   elseif ($s4p > 60) {
       $s4g = 'B';
   }
   elseif ($s4p > 40) {
       $s4g = 'C';
   }
   else $s4g = 'F';


    if($s1g == 'F'||$s2g == 'F'||$s3g == 'F'||$s4g == 'F')
        $status = "Failed";
    else    $status = "Passed";

    echo "<table class = 'table'>
    <tr>
    <td> Name: </td>
    <td> $name </td>
    </tr>
    <tr>
    <td> Semester: </td>
    <td> $sem </td>
    </tr>
    <tr>
    <td> Exam Code: </td>
    <td> $ecode </td>
    </tr>
    </table>";

    echo "<table class='table' border=1>
    <tr>
    <th> Subject Name </th>
    <th> Mark Obtained</th>
    <th> Total Mark </th>
    <th> Grade </th>
    </tr>
    <tr>
    <td> $s1n </td>
    <td> $s1mo </td>
    <td> $s1tm </td>
    <td> $s1g </td>
    </tr>
    <tr>
    <td> $s2n </td>
    <td> $s2mo </td>
    <td> $s2tm </td>
    <td> $s2g </td>
    </tr>
    <tr>
    <td> $s3n </td>
    <td> $s3mo </td>
    <td> $s3tm </td>
    <td> $s3g </td>
    </tr>
    <tr>
    <td> $s4n </td>
    <td> $s4mo </td>
    <td> $s4tm </td>
    <td> $s4g </td>
    </tr>
    </table>";

    if($status=="Failed")
        echo "<table class='table'>
        <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td>Status :</td>
        <td><p class='text-danger'>Failed</p></td>
        </tr></table>";
    else echo "<table class='table'>
    <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td>Status :</td>
    <td><p class='text-success'>Passed</p></td>
    </tr></table>";
}
?>