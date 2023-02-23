<?php 

//load json from file if the file exists
function loadJson()
{
    $lang_json = "";
    if(isset($_GET['lang']))
    {
        $lang_get = preg_replace('/[^A-Za-z0-9\-]/', '', $_GET['lang']);
        if(file_exists(getcwd()."/app/langs/".$lang_get.".json"))
        {
            $lang_json = file_get_contents(getcwd()."/app/langs/".$lang_get.".json");
        }
        else {
            $lang_json = file_get_contents(getcwd()."/app/langs/default.json");
        }
    }
    else {
        $lang_json = file_get_contents(getcwd()."/app/langs/default.json");
    }
    return $lang_json;
}

//render tempalte if the template exists
function render_template($template,$object)
{

    $lang_json = stripslashes(loadJson());
    $lang_json = trim($lang_json);
    $lang = json_decode($lang_json, true);
    if(file_exists(getcwd()."/app/templates/".$template))
    {
        require_once getcwd()."/app/templates/".$template;
    }
}

?>