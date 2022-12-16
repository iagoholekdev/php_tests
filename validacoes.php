<?php
interface I_Validacoes {
  public function isNomeVazio(String $nome): bool;
  public function isIdadeInvalida(int $idade): bool;
  public function isEnderecoVazio(String $endereco): bool;
  public function isTelefoneVazio(String $telefone): bool;
 }

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