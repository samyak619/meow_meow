<!DOCTYPE html>
<head>
    <title>Electricity Bill Calc</title>
</head>

<?php
$r = $a = '';
if (isset($_POST['c'])) {
    $u = $_POST['u'];
    if (!empty($u)) {
        $a = calculate($u);
        $r = 'Total amount for ' . $u . ' units - ' . $a;
    }
}

function calculate($u) {
    $r1 = 3.50;
    $r2 = 4.00;
    $r3 = 5.20;
    $r4 = 6.50;

    if ($u <= 50) {
        $b = $u * $r1;
    } elseif ($u > 50 && $u <= 100) {
        $t = 50 * $r1;
        $rU = $u - 50;
        $b = $t + ($rU * $r2);
    } elseif ($u > 100 && $u <= 200) {
        $t = (50 * $r1) + (100 * $r2);
        $rU = $u - 150;
        $b = $t + ($rU * $r3);
    } else {
        $t = (50 * $r1) + (100 * $r2) + (100 * $r3);
        $rU = $u - 250;
        $b = $t + ($rU * $r4);
    }

    return number_format((float) $b, 2, '.', '');
}
?>

<body>
    <div id="p">
        <h1>Electricity Bill Calculator</h1>

        <form action="" method="post" id="b">
            <input type="number" name="u" id="u" placeholder="Enter units" />
            <input type="submit" name="c" id="c" value="Calculate" />
        </form>

        <div>
            <?php echo '<br />' . $r; ?>
        </div>
    </div>
</body>
</html>
