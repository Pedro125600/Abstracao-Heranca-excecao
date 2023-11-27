<?php 
      class Caminhao extends Veiculo
      
      {
        public function tipoCombustivel(): void
        {
            echo "Gasolina";
        } 
        
        public function potenciaMotor(): void
        {
            echo "100 cavalos";
        }
        
        public function painelDidgital(): void
        {
            echo "Vrum Vrum" ;
        }
        
        }
        
      
?>