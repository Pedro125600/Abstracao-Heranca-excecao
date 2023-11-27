<?php
include_once "Veiculo.php";
include_once "classes/carro.php";
include_once "classes/Moto.php";
include_once "classes/Caminhao.php";
include_once "classes/Onibus.php";


$car = new Carro();
$MOt = new Moto();
$oni = new onibus();
$cam = new Caminhao();



$car->setId(1) ;
$car->setMarca("Jeep");
$car->setMOdelo("sedan");
$car->setano("2012");
$car->setcor("Preto");
$car->setvalor("R$ 20.000");
$car->setId(1) ;

$MOt->setId(2) ;
$MOt->setMarca("BMW");
$MOt->setMOdelo("Moto");
$MOt->setano("2010");
$MOt ->setcor("Vermelha");
$MOt->setvalor("R$ 16.000");


$oni->setId(3) ;
$oni->setMarca("Mercedes");
$oni->setMOdelo("Escolar");
$oni->setano("2008");
$oni ->setcor("Amarelo");
$oni->setvalor("R$ 30.000");

$cam ->setId(4) ;
$cam ->setMarca("Mercedes");
$cam ->setMOdelo("Caminhão de carga");
$cam ->setano("2004");
$cam  ->setcor("Prata");
$cam ->setvalor("R$ 110.000");




?>



<!DOCTYPE HTML>
<html lang="pt-br">   
    <head>   
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js&quot; integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js&quot; 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Aula PHP - Orientado a Objetos</title>
</head>

<body>
  <main>
    <div class="container-md">
      <div class="row ">
        <div class="col">
          <h5>Card BootStrap</h5>
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Aula3_PHPOO</h5>
              <ol class="card-text">
                <li> Foi criada a classe Principal.php
                <li> Nesta classe instanciamos os objetos de todas as classes que criamos : <strong> Veiculo,carro,moto,onibus,caminhao</strong>
                <li> Em seguida inserimos os dados com o metodo de acesso <strong>set</strong>
                <li> Em seguida utilizamos uma tabela<strong>(BootStrap)</strong> para inserir os dados nas linhas com o metodo <strong>get</strong>
                <li> Para cada linha da tabela foi inserido os dados de um objeto diferente.
              </ol>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Id_Veiculo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tipo Combistivel</th>
                    <th scope="col">Potencia Motor</th>
                    <th scope="col">Painel Digital</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                  
                    <td><?php echo $car->getID()  ?></td>
                    <td><?php echo $car->getMarca()  ?></td>
                    <td><?php echo $car->getMOdelo() ?></td>
                    <td><?php echo $car->getano()  ?></td>
                    <td><?php echo $car->getcor()  ?></td>
                    <td><?php echo $car->getvalor() ?></td>
                    <td><?php echo $car->tipoCombustivel() ?></td>
                    <td><?php echo $car->potenciaMotor()  ?></td>
                    <td><?php echo $car->painelDidgital() ?></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><?php echo $MOt->getID()  ?></td>
                    <td><?php echo $MOt->getMarca()   ?></td>
                    <td><?php echo $MOt->getMOdelo()   ?></td>
                    <td><?php echo $MOt->getano()   ?></td>
                    <td><?php echo $MOt->getcor()   ?></td>
                    <td><?php echo $MOt->getvalor()   ?></td>
                    <td><?php echo $MOt->tipoCombustivel() ?></td>
                    <td><?php echo $MOt->potenciaMotor()  ?></td>
                    <td><?php echo $MOt->painelDidgital() ?></td>

                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><?php echo $oni->getID()  ?></td>
                    <td><?php echo $oni->getMarca()  ?></td>
                    <td><?php echo $oni->getMOdelo() ?></td>
                    <td><?php echo $oni->getano() ?></td>
                    <td><?php echo $oni->getcor()  ?></td>
                    <td><?php echo $oni->getvalor() ?></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><?php echo $cam->getID()  ?></td>
                    <td><?php echo $cam->getMarca()  ?></td>
                    <td><?php echo $cam->getMOdelo()  ?></td>
                    <td><?php echo $cam->getano()  ?></td>
                    <td><?php echo $cam->getcor()  ?></td>
                    <td><?php echo $cam->getvalor()  ?></td>
                    <td><?php echo $cam->tipoCombustivel() ?></td>
                    <td><?php echo $cam->potenciaMotor()  ?></td>
                    <td><?php echo $cam->painelDidgital() ?></td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer"><a class="btn btn-primary" href="index.php" role="button">Voltar</a></div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>