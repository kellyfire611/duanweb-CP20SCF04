<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .dongchan {
        background: red;
    }
    .dongle {
        background: blue;
        color: #fff;
    }
    </style>
</head>
<body>
    <?php
    // RENDER 1
    echo '<table border="1">';
    // Loop for rows
    // $i Lặp cho dòng 
    for($i = 0; $i < 4; $i++) {

        if( ($i % 2) == 0) {
            echo '<tr class="dongchan">';
        } else {
            echo '<tr class="dongle">';
        }

        for($j = 0; $j < 5; $j++) {
            echo '<td>';
            echo "Dòng {$i} Cột {$j}";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>

    <h1>Table Render theo kiểu kết hợp PHP và HTML</h1>
    <table border="1">
        <?php for($i = 0; $i < 4; $i++) : ?>
        
            <?php if( ($i % 2) == 0): ?>
            <tr class="dongchan">
            <?php else:?>
            <tr class="dongle">
            <?php endif;?>


                <?php for($j = 0; $j < 5; $j++) : ?>
                <td><?php echo "Dòng {$i} Cột {$j}"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table> 
</body>
</html>
