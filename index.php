<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 12; // Integer
        $num = 4.6; // float
        $res = $number + $num;
        $phrase = 'Переменная равна: ';
        $bool = true;
        echo $bool . '</br>';
        echo $phrase . $res;

        $res = $number - $num;
        echo $res . '</br>';
        $res = $number / $num;
        echo $res . '</br>';
        $res = $number * $num;
        echo $res . '</br>';
        $res = $number % (integer) $num . ' koo';
        
        $number +=5;
        echo $number . '</br>';
        $number -=5;
        echo $number . '</br>';
        $number /=5;
        echo $number . '</br>';
        $number *=5;
        echo $number . '</br>';
        $number %=5;
        echo $number . '</br>';
        $number++;
        echo $number . '</br>';
        
        echo PHP_VERSION . '</br>';
        
        var_dump(defined('PI')) . '</br>';
        
        define("PI", 3.14);
        
        echo PI . '</br>';
        const OH_LULA = 80;
        
        echo OH_LULA . '</br>';
        
        echo defined('PI') . '</br>';
    ?>
</body>
</html>