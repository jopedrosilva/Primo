<?php

    function Primo($inicial, $final){
        $primo = 0;
        $contador = $inicial;
        while($contador < $final){
            $contador2 = 1;
            $eprimo = 0;
            while($contador2 <= $contador){
                if($contador%$contador2 == 0){
                    $eprimo = $eprimo + 1;
                }
                $contador2 = $contador2 + 1;
            }
            
            if($eprimo == 2){
                $primo = $primo + 1;
            }
            
            $contador = $contador + 1;
        }
        
        echo "Encontrados " . $primo . " números primos, são eles: ";
        
        $contador = $inicial;
        while($contador < $final){
            $contador2 = 1;
            $eprimo = 0;
            while($contador2 <= $contador){
                if($contador%$contador2 == 0){
                    $eprimo = $eprimo + 1;
                }
                $contador2 = $contador2 + 1;
            }
            
            if($eprimo == 2){
                $primo = $primo + 1;
                echo $contador . ", ";
            }
            
            $contador = $contador + 1;
        }
    }
     
    //Primo(Valor_Inicial, Valor_Final);    
    Primo(10, 29);
