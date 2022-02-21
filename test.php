<?php
$color = 1;
if (isset($context['color'])) {
    $color = intval($context['color']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <?php Yolk::uicore('allc'); ?>
</head>

<body>
    <img src="<?= Path::rebase("ui/svgs/solid/bars.svg")?>" width="20px" height="20" class="" id="">
    <img width=100 height=100 src="<?= Path::rebase("j/after.png") ?>">

    <h3 class="text-center m-4 <?= ($color == 1 ? 'text-success' : 'text-danger'); ?>">
        <i class="fa-solid fa-fire"></i>
        Thanks for choosing the Yolk framework!!!
    </h3>

    <h4 class="text-muted m-4">
        <ul>
            <?php
            foreach ($context as $key => $value) {
                echo '
                    <li style="width: fit-content"><span>'.$key.'</span> : <span>'.$value.'</span></li>
                ';
            }
            ?>
        </ul>
    </h4>

    <h4 class="text-center text-muted mt-5">
        Try out this link :
        <a href="<?= Path::rebase("test/Yolk/".(++$color % 2)); ?>">
            <i class="fa fa-face-laugh-wink <?= ($color == 1 ? 'text-danger' : 'text-success'); ?>"></i>
        </a>
    </h4>

</body>

</html>