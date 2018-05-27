<?php

    function sum (){
    $sakiko = 0;
    for ($i = 9 ; $i <= 50; $i++){
    $sakiko = $sakiko + $i ;
}
    
    return $sakiko;
}
  
   print sum();
    

 if (sum() > 900){
 　print "９００より大";
}


 else{ 
   print "９００より小さい";
 }

?>