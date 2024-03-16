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
        function say_hello()
        {
            echo 'hello</br>';
            echo 'lalala</br>';
            $name = 'Alex</br>';
            echo $name;
        }
        
        say_hello();

        function goodbye(string $name)
        {
            echo 'До свидания, ' . $name;
        }
        
        goodbye('Alex');
        
        function date_of_birth(int $date)
        {
            echo $date;
        }
        
        function passport(string $surname, string $first_name, string $last_name, string $gender, string $country_of_birth, int $serial_number)
        {
            $passport = [
                'surname' => $surname,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'country_of_birth' => $country_of_birth,
                'serial_number' => $serial_number
            ];
            var_dump($passport);
        }
        
        passport('Spark', 'John', 'Dmitrievich', 'man', 'USA', 4015137067);
    ?>
</body>
</html>