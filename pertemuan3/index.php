<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for($i = 0; $i < 5; $i++) {
//     echo "Hello World <br>";
// }
// $i = 0;
// while( $i <5 ) {
//     echo "Hello World! <br>"; tidak pernah berhenti looping
// }
// while($i <5 ) {
//     echo "Hello World! <br>" terjadi pengulangan dengan batas
// }
// $i = 0;
// $i = 0;
// do {
//     echo "Hello World! <br>";
//     $i++;
// } while( $i <5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: red;
        }
    </style>
</head>
<body>
    < border="1" cellpadding="10" cellspacing="0">
        <?php 
        // for( $i = 1; $i <= 3; $i++) {
        //     echo "<tr>";
        //     for( $j = 1; $j <= 5; $j++) {
        //         echo "<td>$i,$j</td>";
        //     }
        //     echo "</tr>";
        for( $i = 1; $i <= 3; $i++ ) : ?>
         <?php if( $i % 2 == 0 ) : ?>
        <tr class="warna-baris">
        <?php else : ?>
            <tr>
                <?php endif; ?>
            </tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
        </tr>
        <?php endfor; ?>
</body>
</html>