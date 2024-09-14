<?php
class TomarCafe {
    var $tomandoCafe;
    var $cafeFeito;
    
    function TomarCafe(){
        if($this->cafeFeito == true){
            if($this->tomandoCafe == true){
                echo "<p>Você já está tomando café!</p><br>";
            }else{
                $this->tomandoCafe = true;
                echo "<p>Tomando um cafezinho...</p><br>";
            }
        }else{
            echo "<p>Onde está seu café?</p><br>";
        }
    }  
}
?>
