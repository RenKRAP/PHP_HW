<!DOCTYPE>
<html>
    <head>

    </head>
    
    <body>
        <h1>This is HW1</h1>
        <?php
        echo "My first PHP echo!<br><br>";
        ?>
        <form method="post" action="">
            <label for="number1">n : </label>
            <input type="number" name="number1" id="number1">
            <br><br>
            <input type="submit" value="출력">
        </form>
        <?php
        if(isset($_POST['number1'])){
        $n = $_POST['number1'];
        $total_plus = 0;
        $total_times = 1;
        for ($i = 1; $i<$n+1; $i++) {
            echo "$i ";
            $total_plus = $total_plus + $i;
            $total_times = $total_times * $i;
            }
        echo "<br>$n 까지의 합은 : $total_plus";
        echo "<br>$n 까지의 곱은 : $total_times";
        }
        ?>
    </body>
</html>
