<!DOCTYPE html>
<html>

<body>

    <?php
    for ($i = 1; $i <= 50; $i++) {
        // Jika bilangan kelipatan 3
        if ($i % 3 === 0) {
            echo 'Foo';
        } 
        // Jika bilangan kelipatan 5
        else if ($i % 5 === 0) {
            echo 'Bar';
        } 
        // Jika bilangan kelipatan 3 dann 5
        else if ($i % 3 === 0 && $i % 5 === 0) {
            echo 'FooBar';
        }
        echo $i . "<br>";
    };
    ?>

</body>

</html>