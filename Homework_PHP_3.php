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
            $n = $_POST["number1"];
            $pibona_array = array();
            $pibona_array[0] = 1;
            $pibona_array[1] = 1;
            for($i = 0; $i <= $n; $i++){
                $pibona_array[$i+2] = $pibona_array[$i] + $pibona_array[$i+1];
                $pibona_ratio = $pibona_array[$i+1] / $pibona_array[$i];    
                echo $pibona_array[$i] . " " . $pibona_array[$i+1] . " 비율은 : " . $pibona_ratio . " <br><br>";
            }
        }
        ?>
    </body>
</html>