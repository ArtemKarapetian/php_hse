<!DOCTYPE html>
<html>
    <head>
        <title>Test 2. Task 2. Karapetian</title>
    </head>
    <body align="center" bgcolor="#BBBBDB"><font face='Helvetica'>
        <h1>Task 2 of the test.</h1>
        <?php
        $l = $_GET['l'];
        $m = $_GET['m'];
        $n = $_GET['n'];

        echo "<center>Entered numbers are: l = $l , m = $m , n = $n</center>";
        
        $k = ($l - $n) / ($l * $n) * $n;

        if($k >= 0 && $k <= 1) {
            $x = ($l * $l - $n) / $m;
            $y = $k * ($l - $m) / $l;
        } else {
            $x = ($k * $l * $m) / $n;
            $y = $l * $m * $k;
        }
        echo "<font size='4' face='Helvetica'><center>k= " . $k . "<br>x = " . $x . "<br>y = " . $y . "</center></font>";
        ?>
        <a href="index.html">Go to main page</a>
    </font></body>
</html>