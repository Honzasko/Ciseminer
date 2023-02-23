<?php 


//read and return groups
function readGroups($group)
{
    $groups_file = file_get_contents(getcwd().'/app/content/groups.json');
    $groups = json_decode($groups_file,true);
    return $groups;
}

//check if group exists
function existsGroup($group)
{
    $groups = readGroups($group);
    if(!empty($group) && !array_key_exists($group,$groups))
    {
        return false;
    }
    return true;
}

//read and return exercises of group
function readExercises($group)
{
    $exercice = array();
    if(existsGroup($group))
    {
        $groups = readGroups($group);
        $foname = getcwd()."/app/content/". $groups[$group][0]['group_folder']."/";
        if(file_exists($foname) && is_dir($foname))
        {
            $fname = getcwd()."/app/content/". $groups[$group][0]['group_folder']."/group.json";
            if(file_exists($fname))
            {
                $exercises_file = file_get_contents($fname);
                $exercice = json_decode($exercises_file,true);
            }
        }
    }
    return $exercice;

}

//read and return specific exercise from group
function readExercise($group,$name)
{
    $exercice = array();
    if(existsGroup($group))
    {
        $groups = readGroups($group);
        $foname = getcwd()."/app/content/". $groups[$group][0]['group_folder']."/";
        if(file_exists($foname) && is_dir($foname))
        {
            $fname = getcwd()."/app/content/". $groups[$group][0]['group_folder']."/group.json";
            if(file_exists($fname))
            {
                $exercises_file = file_get_contents($fname);
                $exercices = json_decode($exercises_file,true);
                if(key_exists($name,$exercices))
                {
                    $xname =  getcwd()."/app/content/". $groups[$group][0]['group_folder']."/".$exercices[$name][0]['file'];
                    if(file_exists($xname))
                    {
                        $exerce_file = file_get_contents($xname);
                        $exercice = json_decode($exerce_file,true);
                    }
                }

            }
        }
    }
    return $exercice;
}

?>