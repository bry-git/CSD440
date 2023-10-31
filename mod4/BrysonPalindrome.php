<!DOCTYPE html>
<html>
<head>
    <title>Bryson Palindrome</title>
</head>
<body>
<h4><code>"a program that checks to see if a 'string' is a palindrome"</code></h4>
<table border=1>
    <tr>
        <td>Is "pop" a palindrome: </td><td>
            <?php
            require_once "Functions.php";
            $isPalindrome = testIsPalindrome("pop");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Is "Malayalam" a palindrome: </td><td>
            <?php
            $isPalindrome = testIsPalindrome("Malayalam");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Is "malayalam" a palindrome: </td><td>
            <?php
            $isPalindrome = testIsPalindrome("malayalam");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Is "dog" a palindrome: </td><td>
            <?php
            $isPalindrome = testIsPalindrome("dog");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Is "saippuakivikauppias" a palindrome: </td><td>
            <?php
            $isPalindrome = testIsPalindrome("saippuakivikauppias");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Is bellevue a palindrome: </td><td>
            <?php
            $isPalindrome = testIsPalindrome("bellevue");
            if ($isPalindrome == 1) {
                echo "true";
            } else if ($isPalindrome == 0) {
                echo "false";
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>