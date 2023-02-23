<?php 
include getcwd().'/app/template.php';
include getcwd().'/app/controllers/global.php';

$object = array();

if(!isset($_GET['group']))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}


$group_get = preg_replace('/[^A-Za-z0-9\-]/', '', $_GET['group']);
if(!existsGroup($group_get))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}

$groups = readGroups($group_get);

$exercises = readExercises($group_get);

$exercise_get = "";


//check if exercise is set,otherwise it throw error 404
if(!isset($_GET['exercise']))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}

//check if exercise exists otherwise it throw error 404

$exercise_get = preg_replace('/[^A-Za-z0-9\-]/', '', $_GET['exercise']);
if(!key_exists($exercise_get,$exercises))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}

//read exercise
$exercise = readExercise($group_get,$exercise_get);


//check if exercise is not empty
if(empty($exercise))
{
    $error_code = "404";
    require_once getcwd().'/app//controllers/error.php';
    exit(0);
}


//make title for template
$title = $groups[$group_get][0]['group_name']." - ".$exercises[$exercise_get][0]['name'];

$object['title'] = $title;


//check if post data are send,if yes then it show the result of the exercise otherwise exercci will rendered
$post_keys = array_keys($_POST);
if(count($post_keys) > 0)
{
    require_once getcwd().'/app//controllers/result.php';
    exit(0);
}

$questions = "";

//prepare render data 

for($i = 0;$i < intval($exercise['num']);$i++)
{
    $n = strval($i);
    $question = "<div class='question'><fieldset><legend>".$exercise[$n][0]['question']."</legend>ANSWERS</fieldset></div>";

    $answers = "";
    for($k = 0;$k < intval($exercise[$n][0]['answers_num']);$k++)
    {
        $a = $exercise[$n][0]['answers'][$k];
        if($a['type'] == "text")
        {
            $answers = $answers."<input type='radio' value='".$k."' name='a".$i."'><label class='render'>".$a['value']."</label></input><br>";
        }
        else if($a['type'] == "image")
        {
            $answers = $answers."<input type='radio' value='".$k."' name='a".$i."'><img src='./static/img/".$a['value']."' width='100' height=100></input><br>";
        }

    }
    $question = str_replace("ANSWERS",$answers,$question);
    $questions = $questions.$question;
}

//set render data

$object['questions'] = $questions;


render_template("exercise.php",$object);
?>