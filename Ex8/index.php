<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function check_palindrome($string)
    {
        $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
        if ($cleanedString == strrev($cleanedString)) {
            return 1; // The string is a palindrome
        } else {
            return 0; // The string is not a palindrome
        }
    }

    $inputString = "A man, a plan, a canal, Panama";
    if (check_palindrome($inputString)) {
        echo "The string is a palindrome.";
    } else {
        echo "The string is not a palindrome.";
    }
    ?>
</body>

</html>