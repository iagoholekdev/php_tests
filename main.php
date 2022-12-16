<?php
interface I_Pessoa {
  public function getNome();
  public function getIdade();
  public function getEndereco();
  public function getTelefone();
}

class Pessoa implements I_Pessoa {
  public function __construct(string $nome, int $idade, string $endereco, string $telefone){
    $this->nome     = $nome;
    $this->idade    = $idade;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
  }

  public function getNome(): String {
    return $this->$nome;
  }
  public function getIdade(): int {
    return $this->$idade;
  }
   public function getEndereco(): String {
    return $this->$endereco;
  }
   public function getTelefone(): String {
    return $this->$telefone;
  }
}

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

class PessoaValidacao {

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

$pessoa = new Pessoa("", 17, "", "");
$validacoes = new Validacoes();
$pessoaValidacao = new PessoaValidacao($validacoes, $pessoa);
$pessoaValidacao->isNomeVazio();
$pessoaValidacao->isIdadeInvalida();
$pessoaValidacao->isEnderecoVazio();
$pessoaValidacao->isTelefoneVazio();
