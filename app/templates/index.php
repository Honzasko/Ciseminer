<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/dark.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']; ?></title>
</head>
<body>
    <h1><?php echo $lang['title']; ?></h1>
    <div class="list">
        <?php echo $object['list']; ?>
    </div>
    <?php 
        if(empty($object['list']))
        {
            echo "<h2>".$lang['nothing']."</h2>";
        }
    ?>
</body>
</html>