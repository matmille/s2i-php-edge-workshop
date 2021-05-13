<html>
<body>
<style>

<?php

$release = 3;

if ($release == "[undefined]") {
  $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
} else if ($release == 1) {
  $color = "#000000";
} else if ($release == 2) {
  $color = "#66CC99";
} else if ($release == 3) {
  $color = "#996633";
} else if ($release == 4) {
  $color = "#336666";
} else if ($release == 5) {
  $color = "#0066ff";
} else if ($release == 6) {
  $color = "#ff0099";
} else if ($release == 7) {
  $color = "#ff00ff";
} else if ($release == 8) {
  $color = "#ffcc99";
} else if ($release == 9) {
  $color = "#ff0000";
} else if ($release > 9) {
  $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
} else {
  $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}
$color .= ";\n";

?>

body { background-color: #ffffff; }

h1 {
        font-size: 96px;
        background-color: <?php echo $color; ?>
        color: #ffffff;
        display: block;
        padding: .5em;
}

h1:nth-child(2) {
        position: absolute;
        background-color: #ffffff;
        color: <?php echo $color; ?>
        clip-path: inset(-1% -1% 50% -1%);
}

.container1 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
}

.container2 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
}

</style>

<div class="container1"><div class="container2">
<?php
for ($x = 1; $x <= 2; $x++) {
  echo "<h1>Release $release</h1>";
}
?>
</div></div>

</body>
</html>
