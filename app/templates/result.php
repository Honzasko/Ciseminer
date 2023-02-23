<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/dark.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']; ?></title>
</head>
<body>
    <h1><?php echo $object['title'];?></h1><br>
    <h2><?php echo $lang['result']; ?><h2>
    <h2><?php echo $object['percentage'];?>%</h2>
    <h2><?php echo $object['correct']; ?>/<?php echo $object['n_ans']; ?></h2>
</body>
</html>