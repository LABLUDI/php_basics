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
        for($i = 100; $i > 10; $i--) {
            if($i % 2 === 0)
                continue;
            if($i <70)
                break;
            echo $i . '</br>';
        }
        
        echo '</br>';
        
        $i = 0;
        while($i < 10) {
            echo ++$i . '</br>';
            $i += 3;
        }
        
        
        $i = 100;
        do {
            echo '101</br>';
        } while($i == 101);

        $arr = [5,56,7,3,232.098];
        
        for($i = 0; $i < count($arr); $i++) {
            echo 'Значение элемента: ' . $i . ' - ' . $arr[$i] . '</br>';
        }

        $name = 'Alex';
        $age = 10;
        if ($name === 'Boris' || $age === 10) {
            echo 'Yes' . '</br>';
        } else {
            echo 'No' . '</br>';
        }
        
        // 3
        $human_fingers = 7; 
        $cat = 3;
        if ($human_fingers > 5 && $cat != 4) {
            echo 'Ложь' . '</br>';
        }
        
        // 2
        $number = rand(-10, 10);
        if ($number > 0 ) {
            echo 'Число: ' . $number . ' положительное' . '</br>';
        } else {
            echo 'Число: ' . $number . ' отрицательное' . '</br>';
        }
        
        //3
        if ($number != abs($number) ) {
            echo 'Число: ' . $number . ' положительное' . '</br>';
        } else {
            echo 'Число: ' . $number . ' отрицательное' . '</br>';
        }
        
        // 4
        if ($number % 2 === 0) {
            echo 'Число: ' . $number . ' четное' . '</br>';
        } else {
            echo 'Число: ' . $number . ' нечетное' . '</br>';
        }
        
        // 5
        if ($number % 5 === 0) {
            echo 'Число: ' . $number . ' кратно 5' . '</br>';
        } else {
            echo 'Число: ' . $number . ' не кратно 5' . '</br>';
        }
        
        // 6
    function generateRandomString() {
        $isEmpty = (bool) rand(0, 1); // Генерируем случайное булево значение: true (1) или false (0)

        if ($isEmpty) {
            return ""; // Возвращаем пустую строку, если $isEmpty равно true
        } else {
            // Генерируем случайную непустую строку
            $length = rand(1, 10); // Генерируем случайную длину строки от 1 до 10 символов
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
        }
    }
    $randomString = generateRandomString();
    echo 'Результат вызова функции generateRandomString(): ' . generateRandomString() . '</br>';


    var_dump($characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');

    for ($i = 0; $i < strlen($characters); $i++) {
        echo "Индекс: $i, Символ: $characters[$i]" . '</br>';
    }
    echo '</br>';
    
    $n_1 = 10;
    $n_2 = 13;
    $string_1 = 'fsg';
    $string_empty = '';
    $true = true;
    $false = false;
    
    if ($n_1 === $n_2) {
        echo 'Переменные равны' .'</br>';
    } else {
        echo 'Переменные не равны' .'</br>';
    }
    
    const STRING_EMPTY = 0;
    const STRING = 1;
    
    $rand_number= rand(0, 2);
    
    static $arr_string = [
        STRING_EMPTY => '',
        STRING => 'Hi',
    ];
    
    $rand_string = $rand_number;
    if ($rand_string === 0) {
        echo var_dump($arr_string[STRING_EMPTY]) . '</br>';
    } elseif ($rand_string === 1) {
        echo $arr_string[STRING] . '</br>';
    } else {
        echo $rand_number . '</br>';
    }
    
    $n = rand(-10, 10);
    $range = rand(-3, 4);
    
    if (($n >= $range) && ($n <= $range) ) {
        echo 'Входит в диапозон: ' . $n . '</br>';
    } else {
        echo 'Не входит в дипозон от: ' . $n . '</br>';
    }
    ?>
</body>
</html>