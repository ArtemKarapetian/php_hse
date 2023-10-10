<!DOCTYPE html>
<html>
    <head>
        <title>Test 2. Task 3. Karapetian</title>
    </head>
    <body align="center" bgcolor="#BBBBDB"><font face='Helvetica'>
        <h1>Task 3 of the test.</h1>
        <?php
        $word1 = $_GET['word1'];
        $word2 = $_GET['word2'];
        $word3 = $_GET['word3'];

        function checkIfValid($word1, $word2, $word3) {
            if (empty($word1) || empty($word2) || empty($word3)) {
                return false;
            }
            if (strlen($word1) == 0 || strlen($word2) == 0 || strlen($word3) == 0) {
                return false;
            }

            if (($word1[0] == "A" && (($word2[0] == "B" && $word3[0] == "K") || ($word3[0] == "B" && $word2[0] == "K"))) ||
            ($word2[0] == "A" && (($word1[0] == "B" && $word3[0] == "K") || ($word3[0] == "B" && $word1[0] == "K"))) ||
            ($word3[0] == "A" && (($word1[0] == "B" && $word2[0] == "K") || ($word2[0] == "B" && $word1[0] == "K")))) {
                return strlen($word1) == strlen($word2) && strlen($word1) == strlen($word3);
            }
            return false;
        }

        if (checkIfValid($word1, $word2, $word3) == false) {
            echo "Words are not valid.<br>";
        } else {
            echo "<p><font size='4'>The result (words in alphabetical order):<br></font></p>";
            $words = array($word1, $word2, $word3);
            sort($words);
            foreach ($words as $word) {
                echo "<font face='Helvetica'><center>$word</center></font><br>";
            }
        }
        ?>
        <a href="index.html">Go to main page</a>
    </font></body>
</html>
