<!DOCTYPE>
<html>
    <head>

    </head>
    
    <body>
        <h1>This is HW2</h1>
        <form method="post" action="">
            <label for="number1">n : </label>
            <input type="number" name="number1" id="number1">
            <br><br>
            <input type="submit" value="출력">
        </form>
        <?php
        if(isset($_POST["number1"])){
            $n = $_POST['number1'];
            $data = array();
            for($i = 0; $i<=$n; $i++) {
                $data[$i] = rand(10,100);
                echo "$data[$i] ";
                sort($data);
            }
            echo "<br><br><br>";
            for($j = 0; $j <= $n; $j++){
                echo "$data[$j] ";
            }
        }
        ?>
    </body>
</html>