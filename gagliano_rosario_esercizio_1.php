<?php
$arr1=[1,2,3,4,5];
$arr2=[6,7,8,9,10];
//count array
function printElements($arr1){
    $prov = count($arr1);

    for ($i = 0; $i < $prov; $i++) {
        echo "<br>";
        echo "Il numero  " . $arr1[$i] . " si trova nella posizione:  " . $i. "<br>";
    }
}
//somma
function sumElements($arr1){
    $somma = 0;

    for ($i=0; $i < count($arr1) ; $i++) { 
        $somma = $arr1[$i] + $somma;
    }
    echo "<br>";
    echo "La somma di tutti gli elementi   è : " .$somma;
}
//sottrazione
function subElements($arr1){
    $sottrazione = 0;

    for ($i=0; $i <count($arr1) ; $i++) { 
        $sottrazione =  $sottrazione - $arr1[$i] ;
    }
    echo "<br>";
    echo "<br>";
    echo "La sottrazione delgli di tutti gli elementi  è : " .$sottrazione;
    echo "<br>";    

}
function sumElementsOfArrays($arr1,$arr2){
    $somma=0;
    $arr3=[];
    for ($i=0; $i < count($arr1) ; $i++) { 
        $somma=$arr1[$i]+$arr2[$i];
        $arr3[$i]=$somma;
 
}
return $arr3;
}
 
function createMaxArray($arr1,$arr2){
    $arr4=[];
  
    for ($i=0; $i < count($arr1); $i++) { 
      for ($i=0; $i < count($arr2); $i++) { 
          if($arr1[$i]< $arr2[$i]){
              $arr4[$i] =  $arr2[$i];
          }
          else{
              $arr4[$i] =  $arr1[$i];
  
          }
      }
  }
  return $arr4;
  }
  function checkArray($arr1,$arr2){
    for ($i=0; $i < count($arr1); $i++) { 
        for ($p=0; $p < count($arr2); $p++) { 
            if($arr1[$i] == $arr2[$p]){
               return false;
            }
        }
    }
    return true;
    }
  








printElements($arr1);
sumElements($arr1);
subElements($arr1);
printElements($arr2);
sumElementsOfArrays($arr1,$arr2);
printElements(sumElementsOfArrays($arr1,$arr2));
createMaxArray($arr1,$arr2);
printElements(createMaxArray($arr1,$arr2));
checkArray($arr1,$arr2);

$ceck=checkArray($arr1,$arr2);
if($ceck==true){
    echo "<br>"; 
    echo"il valore è true";
}else{
    echo "<br>"; 
    echo"il valore è false";
}







?>