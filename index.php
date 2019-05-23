<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>FizzBuzz Program</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="fizzbuzz" />
        <meta name="description" content="FizzBuzz PHP Program" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>    
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <body>
        <h1>FizzBuzz PHP Program</h1>
        <p>A popular tried and tested programming task in PHP</p>
        <p>The program prints numbers from 1 to 100. For multiples of three it prints "Fizz" instead of the number and for the multiples of five it prints "Buzz". For numbers which are multiples of both three and five it prints "FizzBuzz".</p>
        <ul>
        <?php
        $i =1;
        for($i; $i<=100; $i++){
            
            $fizz = ($i%3 === 0)? 'FIZZ' : '';
            $buzz = ($i%5 === 0)? 'BUZZ' : '';

            $v = $i;
            if($fizz && $buzz){
                $v = $fizz . $buzz;
            } elseif($fizz){
                $v = $fizz;
            } elseif($buzz){
                $v = $buzz;
            }

            echo '<li>' . $v . '</li>';
        }
        ?>
        </ul>
    </body>
</html>
