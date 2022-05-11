<?php 

$operazioni = $_GET['operazioni'];
$array1 = $_GET['array1'];
$array2 = $_GET['array2'];
$arr1 = explode(',',$array1);
$arr2 = explode(',',$array2);



 
switch ($operazioni) {
    case 'sumElements':
        if($array1){
            sumElements($arr1);
            echo "<br>"; 
            echo "ci sono gli elementi nell array 1";
        }else{
            echo "<br>"; 
            echo"array1 vuoto";
        }
        if($array2){
            sumElements($arr2);
            echo "<br>"; 
            echo "ci sono gli elementi nell array 2";
        }else{
            echo "<br>"; 
            echo"array2 vuoto";
        }
        
        break;
        
    case 'subElements':
        if($array1){
           
            subElements($arr1);
            echo "<br>"; 
            echo "ci sono gli elementi nell array 1";
        }else{
            echo "<br>"; 
            echo"array1 vuoto";
        }
        if($array2){
            subElements($arr2);
            echo "<br>"; 
            echo "ci sono gli elementi nell array 2";
        }else{
            echo "<br>"; 
            echo"array2 vuoto";
        }
        break;
        
    case 'sumElementsOfArrays':
        if($array1 && $array2){
              sumElementsOfArrays($arr1,$arr2);
        printElements( sumElementsOfArrays($arr1,$arr2));
        }else{
            echo "Errore";
        }
      

        break;
        case 'createMaxArray':
            if($array1 && $array2){
                createMaxArray($arr1,$arr2);
                printElements( createMaxArray($arr1,$arr2));
          }else{
              echo "Errore";
          }
           
            
            break;
            case 'checkArray':
                if($array1 && $array2){
                    checkArray($arr1,$arr2);
                    $ceck=checkArray($arr1,$arr2);
                     if($ceck==true){
                     echo "<br>"; 
                          echo"il valore è true";
                         }else{
                      echo "<br>"; 
                          echo"il valore è false";
                             }
                }else{
                    echo "Errore";
                }
               
               
    
                break;
    
    default:
        echo"<br>";
        echo "Non trovato";
        break;
}
function printElements($arr1){
    $prov = count($arr1);

    for ($i = 0; $i < $prov; $i++) {
        echo "<br>";
        echo "Il numero  " . $arr1[$i] . " si trova nella posizione:  " . $i. "<br>";
    }
}
function sumElements($arr1){
    $somma = 0;

    for ($i=0; $i < count($arr1) ; $i++) { 
        $somma = $arr1[$i] + $somma;
    }
    echo "<br>";
    echo "La somma di tutti gli elementi   è : " .$somma;
}
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

?>