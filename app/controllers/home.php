<?php 
include getcwd().'/app/template.php';


//get group data
$groups_file = file_get_contents(getcwd().'/app/content/groups.json');
$groups = json_decode($groups_file,true);


//initialize for render data
$object = array();
$list_groups = "";

//gather render
$keys = array_keys($groups);
for($i = 0;$i < count($keys);$i++)
{
    $value = htmlspecialchars($groups[$keys[$i]][0]['group_name']);
    $list_groups = $list_groups."<a href='?page=group&group=".$keys[$i]."'><div class='item'>".$value."</div></a>";
}

//apply for render data
$object['list'] = $list_groups;

render_template("index.php",$object);
?>