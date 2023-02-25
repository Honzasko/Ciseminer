<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/<?php echo $object['theme']; ?>.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']; ?></title>
</head>
<body>
    <h1><?php echo $object['title'];?></h1><div class="controls"><a onclick="history.back()"><img  wdith="25" height="25" src="./static/img/icons/backward.svg"></a><a onclick="ChangeTheme();"><img  wdith="25" height="25" src="./static/img/icons/theme.svg"></a></div>
    <h2><?php echo $lang['result']; ?><h2>
    <h2><?php echo $object['percentage'];?>%</h2>
    <h2><?php echo $object['correct']; ?>/<?php echo $object['n_ans']; ?></h2>
    <script src="./static/js/page.js"></script>
</body>
</html>