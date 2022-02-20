
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yolk Framework</title>
    <link rel="apple-touch-icon" href="favicon.png">
    <?php
        Yolk::uicore('allcss');
    ?>
</head>
<body>
    <?php
div::container('s');
el::p('class="text-center text-muted mt-5"',
[
   '500 - Internal Server Error',
   el::a('href="home/"',
   [
   'Home',
    ]),
]);

div::container('e');
        Yolk::uicore('alljs');
    ?>
   
   
</body>
</html>