<?php 
class Veiculo
{

private $_id;
private $_Marca;
private $_modelo;
private $_ano;
private $_cor;
private $_valor;

public function setID($id){$this->_id = $id;  }
public function setMarca($Marca){$this->_Marca = $Marca;  }
public function setMOdelo($Modelo){$this->_modelo = $Modelo;  }
public function setano($ano){$this->_ano = $ano;  }
public function setcor($cor){$this->_cor = $cor;  }
public function setvalor($valor){$this->_valor = $valor;  }


public function getID(){return $this->_id ;  }
public function getMarca(){return $this->_Marca ;  }
public function getMOdelo(){return $this->_modelo ;  }
public function getano(){return $this->_ano ;  }
public function getcor(){return $this->_cor ;   }
public function getvalor(){return $this->_valor ;  }





};
