<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/<?php echo $object['theme']; ?>.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']." - ".$object['group']; ?></title>
</head>
<body>
    <h1><?php echo $lang['title']." - ".$object['group']; ?></h1><div class="controls"><a onclick="history.back()"><img  wdith="25" height="25" src="./static/img/icons/backward.svg"></a><a onclick="ChangeTheme();"><img  wdith="25" height="25" src="./static/img/icons/theme.svg"></a></div><br>
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
    <script src="./static/js/page.js"></script>
</body>
</html>