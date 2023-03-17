<?php

// $votersAge = 18;
// $pvc = true;
// $votersWard = 020;


if($votersAge < 18){
    echo 'Under 18<br>';
}
if($pvc == false){
    echo "You have to get a PVC<br>";
}
if($votersWard !== 020){
    echo 'Your ward has to be 020<br>';
}
if($votersAge >= 18 && $pvc == true && $votersWard == 020){
    echo 'You are eligible to vote';
}
?>