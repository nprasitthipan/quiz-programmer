<!DOCTYPE html>
<html>
    <head>
        <title>QUIZ 1</title>
    </head>
    <body>
        <form action method="post">
            Number of Star: <input type="number" name="star" />
            <button>Go</button>
        </form>
        <br>
        <br>
        <?php
            if ($_POST) {
                $count = $_POST['star']; 

                for ($x = 0; $x < $count; $x++) {
                    if ($count % 2 == 0) {
                        for ($y = 0; $y <= $x; $y++) {
                            echo "*";
                        }
                        echo "<br>";
                        
                    } else {
                        for ($y = $count; $y > $x; $y--) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                }
            }
        ?>
    </body>
</html>
