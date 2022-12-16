<?php
$path = "interfaces/validacoesInterface.php";	
require_once($path);

class PessoaValidacao implements I_ValidacoesPessoa{

  public function __construct(Validacoes $validacoes, Pessoa $pessoa){
    $this->validacoes  = $validacoes;
    $this->pessoa      = $pessoa;
  }

  public function isNomeVazio() {
    if ($this->validacoes->isNomeVazio($this->pessoa->nome)) {
      echo "Nome vazio\n";
    }
}

  public function isIdadeInvalida() {
    if ($this->validacoes->isIdadeInvalida($this->pessoa->idade)) {
      echo "Idade invalida\n";
  }
}
  public function isEnderecoVazio() {
    if ($this->validacoes->isEnderecoVazio($this->pessoa->endereco)) {
      echo "Endereco vazio\n";
    }
  }

  public function isTelefoneVazio() {
    if ($this->validacoes->isTelefoneVazio($this->pessoa->telefone)) {
      echo "Telefone vazio\n";
  }
}


}