<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Page</title>
    <link rel="stylesheet" href="<?= Path::rebase("j/style.css") ?>">
</head>
<body>
    <p>Subfolder links work well</p>

    <img width=100 height=100 src="<?= Path::rebase("j/after.png")?>">

    <?php
        foreach ($context as $key => $value) {
            echo '<p>Variable $context["'.$key.'"] contains '.$value. '</p>';
        }
    
    ?>
    
</body>
</html>