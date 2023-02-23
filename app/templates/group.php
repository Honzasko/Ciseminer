<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/dark.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']." - ".$object['group']; ?></title>
</head>
<body>
    <h1><?php echo $lang['title']." - ".$object['group']; ?></h1>
    <h2><?php 
        if(!isset($object['list']))
        {
            echo $lang['nothing'];
        }
        ?></h2>
    <div class="list">
        <?php 
        if(isset($object['list']))
        {
            echo $object['list'];
        }
        ?>
    </div>
    <?php 
        if(empty($object['list']))
        {
            echo "<h2>".$lang['nothing']."</h2>";
        }
    ?>
</body>
</html>