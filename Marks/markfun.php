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

    function findgrade($smo,$stm)
    {
        $sp = ( $smo / $stm ) * 100;
        if($sp > 80)
            return 'A';
        else if($sp > 60)
                return 'B';
            else if($sp > 40)
                    return 'C';
                else return 'F';
    }

    $s1g = findgrade($s1mo,$s1tm);
    $s2g = findgrade($s2mo,$s2tm);
    $s3g = findgrade($s3mo,$s3tm);
    $s4g = findgrade($s4mo,$s4tm);

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