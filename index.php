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
    
        $x = 45;
        $arr_1 = array(0, 4, 5, 'Ghbdt', true, 7.6, $x);
        var_dump($arr_1);
        $arr_2 = [5,6];
        echo $arr_1[0] . '</br>';
        $arr_1[0] = 5;
        echo $arr_1[0] . '</br>';
        $arr_3 = array(array(4,3,647,),array('hj','okiju'));
        echo $arr_3[1][1] . '</br>';
        echo $arr_3[1][2] = 705;
        echo '</br>';
        
        $arr_4 = 
        [
            'short' => 'Dict',
            'long' => 'Dictionary'
        ];
        $arr_4['short'] = 'foo';
        echo $arr_4['short'];
        echo '</br>';
        
        foreach($arr_4 as $key => $value) {
            echo 'Ключ: ' . $key . ', Значение: ' . $value . '</br>';
        }
    ?>
</body>
</html>