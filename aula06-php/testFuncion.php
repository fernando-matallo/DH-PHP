<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testFunction</title>
</head>
<body>

    <?php
        $mystring = 'abc';
        $findme   = 'a';
        $pos = strpos($mystring, $findme);
        echo "strpos: $pos <br>";
    ?>

    <?php
        $email  = 'name@example.com';
        $domain = strstr($email, '@');
        echo "strstr: $domain<br>"; 
        $user = strstr($email, '@', true); // A partir do PHP 5.3.0
        echo "$user <br>"; // prints name
    ?>

    <?php
        $str = 'abcdef';
        $tamanhoStr = strlen($str);
        echo "strlen: $tamanhoStr <br>";
    ?>

    <?php
        $vowels = array("x", "z", "l", "o", "c");
        $onlyconsonants = str_replace($vowels, "", "Chitãozinho");
        echo "str replace: $onlyconsonants <br>";
    ?>

    <?php
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        $result = count($a);
        echo "count: $result <br>"
        // $result == 3
    ?>

    <?php
        
        if (isset($var)) {
        echo "Essa variável existe.";
        } else {
        echo "não encontrada";
        }

    ?>
        
</body>
</html>