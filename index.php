<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2. Karapetian</title>
    </head>
    <body align="center" bgcolor="#BBBBDB"><font face='Helvetica'>
        <h1>This application calculates 2 numbers</h1>
        <p>Enter 4 input numbers.<p>
        <form action="index.php" method=get>
            A = <input type="number" step="any" name="A"><br>
            B = <input type="number" step="any" name="B"><br>
            C = <input type="number" step="any" name="C"><br>
            K = <input type="number" step="any" name="K"><br>
            <button type="submit">Calculate!</button>
        </form>
    </font></body>
</html>


<?php
$A = $_GET['A'];
$B = $_GET['B'];
$C = $_GET['C'];
$K = $_GET['K'];

if (empty($A) && empty($B) && empty($C) && empty($K)) {
    exit;
}
if (empty($A) || empty($B) || empty($C) || empty($K)) {
    echo "Enter all the numbers, not only part of them.";
    exit;
}
echo "<font face='Helvetica'><center>Entered numbers are: A = " . $A . ", B = " . $B . ", C = " . $C . ", K = " . $K . "</center></font>";

$S = ($A * $B - $K * $C) * $A / ($B * $B - $A * $C);

$F = sin(pi() / 6) - 0.5 * $S / ($A * $B * $C);

echo "<font size='4' face='Helvetica'><center><br>S = " . $S . "<br>F(S) = " . $F . "</center></font>";
?>
