<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/dark.css">
    <link rel="stylesheet" href="static/css/main.css">
    <title><?php echo $lang['title']; ?></title>
</head>
<body>
<form method="post">
    <h1><?php echo $object['title'];?></h1><br>
    <?php echo $object['questions'];?><br>
    <button action="submit"><?php echo $lang['result_btn']; ?></button>
</form>
</body>
</html>