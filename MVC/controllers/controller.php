<?php 
    class MvcController{
        
        //llama la plantilla
        public function plantilla(){
            //include() se utiliza para pedir el archivo que estemos llamando
            include ("views/template.php");
        }
    }

?>