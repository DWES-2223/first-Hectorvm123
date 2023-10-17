<!DOCTYPE html>
<html>
<body>
    <?php
        $greet = function($name)
        {
            return "Hello, " . $name;
        };
        echo $greet('World');
    ?>
</body>
</html>