<?php 
include getcwd().'/app/template.php';
include getcwd().'/app/controllers/global.php';

//check if group is set,otherwise it will throw error 404
if(!isset($_GET['group']))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}

//replace special characters with null character and then check if the group name exists,if not then it throw error 404
$group_get = preg_replace('/[^A-Za-z0-9\-]/', '', $_GET['group']);
if(!existsGroup($group_get))
{
    $error_code = "404";
    require_once getcwd().'/app/controllers/error.php';
    exit(0);
}

//read group data

$groups = readGroups($group_get);
$object = array();
$list = "";

//read exercises from group and prepare render data

$exercises = readExercises($group_get);
$keys = array_keys($exercises);
for($i = 0;$i < count($keys);$i++)
{
    $value = htmlspecialchars($exercises[$keys[$i]][0]['name']);
    $list = $list."<a href='?page=exercise&group=".$group_get."&exercise=".$keys[$i]."'><div class='item'>".$value."</div></a>";
}

//set render data
$object['list'] = $list;

$object['group'] = $groups[$group_get][0]['group_name'];

render_template("group.php",$object);
?>