<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/dark.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.css" integrity="sha384-vKruj+a13U8yHIkAyGgK1J3ArTLzrFGBbBc0tDp4ad/EyewESeXE/Iv67Aj8gKZ0" crossorigin="anonymous">
    <title><?php echo $lang['title']; ?></title>
</head>
<body>
<form method="post">
    <h1><?php echo $object['title'];?></h1><br>
    <?php echo $object['questions'];?><br>
    <button action="submit"><?php echo $lang['result_btn']; ?></button>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.4/dist/katex.min.js" integrity="sha384-PwRUT/YqbnEjkZO0zZxNqcxACrXe+j766U2amXcgMg5457rve2Y7I6ZJSm2A0mS4" crossorigin="anonymous"></script>
    <script src="./static/js/math.js"></script>
</form>
</body>
</html>