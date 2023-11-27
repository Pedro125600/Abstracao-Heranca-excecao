<?php 
      class Moto extends Veiculo{

public function tipoCombustivel(): void
{
    echo "gasolina";
} 

public function potenciaMotor(): void
{
    echo "160 cilindros";
}

public function painelDidgital(): void
{
    echo "painel led" ;
}
      }
?>