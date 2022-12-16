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
