<?php
$path = "interfaces/validacoesInterface.php";	
require_once($path);

class Validacoes implements I_Validacoes {
  public function isNomeVazio(String $nome): bool{
    return ($nome == "");
  }
  public function isIdadeInvalida(int $idade): bool {
    return ($idade < 18 || $idade > 80); 
  }
  public function isEnderecoVazio(String $endereco): bool {
    return ($endereco == "");
  }
  public function isTelefoneVazio(String $telefone): bool {
    return ($telefone == "");
  }
}