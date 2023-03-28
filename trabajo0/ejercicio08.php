<?php
function unionArray($arrayA,$arrayB){
    $n=count($arrayA)+count($arrayB);
    $arrayUnion[$n];
    for ($i=0; $i < $n; $i++) { 
        if($i < count($arrayA)){
            $arrayUnion[$i]=$arrayA[$i];
        }else{
            $j=0;
            while ($arrayUnion[$j] != null ) {
                if ($arrayUnion[$j] != $arrayB[$i-count($arrayA)]) {
                    $arrayUnion[$i] = $arrayB[$i-count($arrayA)];
                }
                $j++;
            }
        }
    }
    print_r($arrayUnion);
}

$arrayA[3];
$arrayB[3];
for ($i=0; $i < 3; $i++) { 
    $arrayA[$i] = $i;
    $arrayB[$i] = $i;
}
unionArray($arrayA,$arrayB);