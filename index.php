<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <title>Beginner PHP Exercise</title>
    <link rel="icon" href="public/favicon.svg">
</head>

<body>
    <!-- FUNCTION & STRING -->
    <?php
    $a = ucwords("beginner");
    $b = strtoupper("php");
    $c = ucwords("exercise");
    $d = "Latihan Bahasa Pemrograman";
    $e = strtoupper("php,");
    $f = "MySQL, dan phpMyAdmin";
    // phpinfo();
    ?>
    <h2>
        <?php echo "$a $b $c"; ?>
    </h2>
    <p>
        <?php echo $d . ' ' . $e . ' ' . $f; ?>
    </p>
    <!--END OF FUNCTION & STRING -->

    <img src="public/favicon.svg" alt="PHP"
        style="display: block; height: 50%; width: auto; max-height: 300px; margin: 0 auto;">
    <div class="black-line"></div>

    <!-- BOOLEAN -->
    <?php
    $h = 1;
    $i = 0;
    $j = $h && $i;
    $k = $h || $i;
    ?>
    <p>
        <?php
        var_dump($j);
        echo "<br>";
        var_dump($k);
        ?>
    </p>
    <p>
        <?php

        ?>
    </p>
    <!-- END OF BOOLEAN -->

    <div class="black-line"></div>

    <!-- ARRAY -->
    <?php
    $l = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $l[] = "tambah";
    $l[99] = 99;
    $l[0] = 100;
    ?>
    <p>
        <?php
        echo $l[0] . "<br>";
        echo $l[10] . "<br>";
        echo $l[99] . "<br>";
        echo $l[100] ?? "Data Tidak Di Temukan!";
        echo "<br>";
        print_r($l);
        echo "<br>";
        var_dump($l);
        ?>
    </p>
    <!-- END OF ARRAY -->

    <!-- ASSOCIATIVE ARRAY -->
    <?php
    // $m["satu"] = 1;
    // $m["dua"] = 2;
    // $m["tiga"] = 3;
    // $m["empat"] = 4;
    
    $m = [
        "satu" => 1,
        "dua" => 2,
        "tiga" => 3,
        "empat" => 4,
    ]
        ?>
    <p>
        <?php
        // echo "$m[0], $m[1], $m[2], $m[3]";
        echo "$m[satu], $m[dua], $m[tiga], $m[empat]";
        ?>
    </p>
    <!-- END OF ASSOCIATIVE ARRAY -->
</body>

</html>