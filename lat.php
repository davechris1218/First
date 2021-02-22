<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    function test() {
        static $x = "a";
        echo $x;
        $x++;
    }
    
    test();
    echo "<br>";
    test() . test() . test();
    echo "<br>";
    test();

    ?>

</body>

</html>