<!DOCTYPE html>
<html>

<body>

    <?php
    $aplikasi[1] = "gtAkademik";
    $aplikasi[2] = "gtFinansi";
    $aplikasi[3] = "gtPerizinan";
    $aplikasi[4] = "eCampuz";
    $aplikasi[5] = "eOviz";

    $i = 1;

    // Melakukan perulangan sebanyak jumlah $aplikasi
    while ($i <= count($aplikasi)) {

        echo $aplikasi[$i] . '<br>';

        $i++;
    }
    ?>

</body>

</html>