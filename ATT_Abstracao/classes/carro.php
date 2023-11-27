<?php
class Carro extends Veiculo
{

public function tipoCombustivel(): void
{
    echo "Diesel";
} 

public function potenciaMotor(): void
{
    echo "3.5";
}

public function painelDidgital(): void
{
    echo null ;
}

}
