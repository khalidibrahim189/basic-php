<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF dan switch</title>
</head>

<body>


    <?php

    // $nilai = 50;
    // if ($nilai > 80) {
    //     echo "Lulus diprestasi terbaik";
    // } elseif ($nilai > 70) {
    //     echo "Remedial";
    // } elseif ($nilai > 60) {
    //     echo "Remedial 2x";
    // } else {
    //     echo "Mohon maaf anda tidak lulus";
    // }

    // switch


    $jadwal = 2;
    switch ($jadwal) {
        case 1:
            echo "Hari ini belajar PHP";
            // break;
        case 2:
            echo "Hari ini belajar Mysql";
            break;
        case 3:
            echo "Hari ini belajar HTML";
            break;
        case 4:
            echo "Hari ini belajar CSS";
            break;
        case 5:
            echo "Hari ini belajar Bootstrap";
            break;
        default:
            echo "Hari ini libur";
            break;
    }


    ?>

</body>

</html>