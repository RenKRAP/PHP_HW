<!DOCTYPE>
<html>
    <head>

    </head>
    
    <body>
        <h1>This is HW1</h1>
        <h2>합, 곱 구하기</h2>
        <?php
        echo "My first PHP echo!<br>";
        $n = 10;
        $total_plus = 0;
        $total_times = 1;
        for ($i = 1; $i<$n+1; $i++) {
            echo "$i ";
            $total_plus = $total_plus + $i;
            $total_times = $total_times * $i;
        }
        echo "<br>$n 까지의 합은 : $total_plus";
        echo "<br>$n 까지의 곱은 : $total_times";

        ?>
    </body>
</html>