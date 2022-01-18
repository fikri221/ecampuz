<!DOCTYPE html>
<html>

<body>

    <?php
    function division($a, $b)
    {
        if ($a == 0)
            return 0;

        if ($b == 0)
            return 'undefined';

        $negatif = false;

        // Cek apakah ada bilangan negatif
        if ($a < 0) {
            $a = -$a;

            if ($b < 0)
                $b = -$b;
        } else if ($b < 0) {
            $b = -$b;
            $negatif = true;
        }

        // jika $a >= $b maka kurang $a dengan $b kemudian tambah 1 ke hasil bagi
        $hasil = 0;
        while ($a >= $b) {
            $a = $a - $b;
            $hasil++;
        }

        // Cek jika $negatif = true lalu buat $hasil negatif
        if ($negatif)
            $hasil = -$hasil;
        return $hasil;
    }

    $a = 10;
    $b = 6;
    echo division($a, $b);
    ?>

</body>

</html>