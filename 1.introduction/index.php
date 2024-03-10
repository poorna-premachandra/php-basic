<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title><?php echo "Learn PHP"; ?></title>
</head>

<body>
    <h1>Hello</h1>
    <?= 'Shorthand version without php echo' ?>
    <?php echo '<h2>Parsing html inside an echo</h2>'; ?>
    <?php print '<h2>Parsing html inside an print</h2>'; ?>

    <?php
    //this is a single line comment. Does not appead in web page.

    /*
        this is a multi line comment. Does not appear in web page.
        Line 1
        Line 2
        Line 3
     */
    ?>
</body>

</html>