<?php 

//store number of correct answer
$correct = 0;

//check answers
for($i = 0;$i < intval($exercise['num']);$i++)
{
    $n = strval($i);
    $a = $exercise[$n][0]['answers'][$_POST[$post_keys[$i]]];
    if($a['correct'] == 'true')
    {
        $correct++;
    }
}

//set render data
$object['correct'] = strval($correct);
$object['n_ans'] = $exercise['num'];
$percentage =  $correct / intval($exercise['num']);
$percentage = $percentage * 100;
$object['percentage'] = strval($percentage);

render_template("result.php",$object);
?>