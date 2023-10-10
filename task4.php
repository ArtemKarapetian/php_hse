<!DOCTYPE html>
<html>
    <head>
        <title>Test 2. Task 4. Karapetian</title>
    </head>
    <body align="center" bgcolor="#BBBBDB"><font face='Helvetica'>
        <h1>Task 4 of the test.</h1>
        <p><font size='4'>The result array called n is:</font></p>
        <?php
        $d = $_GET['d'];
        $b = $_GET['b'];
        $A = $_GET['A'];

        $b_sum = array_sum($b);

        function array_mul($d) {
            $multi = 1;
            foreach ($d as $number) {
                $multi = $multi * $number;
            }
            return $multi;
        }

        $d_multi = array_mul($d);
        if ($d_multi == 0) {
            echo "<font face='Helvetica'>division by zero may occure so the code is stopped.</font><br>";
        } else {
            $const_multiplier = ($b_sum - $A) / $d_multi;

            for ($i = 1; $i <= 10; $i++) {
                $n[$i] = $const_multiplier * $b[$i];
            }

            echo "<br>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<font face='Helvetica'>n[$i] = $n[$i]</font><br>";
            }
        }

        ?>
        <a href="index.html">Go to main page</a>
    </font></body>
</html>
