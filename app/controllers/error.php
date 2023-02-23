<?php
include_once getcwd()."/app/template.php";

//handle errors

$object = array();

switch($error_code)
{
    case "404": render_template("error404.php",$object);break;
}

?>