<?php

require_once('validacoes.php');
require_once('pessoa.php');
require_once('validacoesPessoa.php');

$pessoa = new Pessoa("", 24, "", "32250610");
$validacoes = new Validacoes();
$pessoaValidacao = new PessoaValidacao($validacoes, $pessoa);
$pessoaValidacao->isNomeVazio();
$pessoaValidacao->isIdadeInvalida();
$pessoaValidacao->isEnderecoVazio();
$pessoaValidacao->isTelefoneVazio();


print("Usuário: "  . $pessoa->getNome()     . "\n" .
      "Idade: "    . $pessoa->getIdade()    . "\n" .
      "Endereço: " . $pessoa->getEndereco() . "\n" .
      "Telefone: " . $pessoa->getTelefone() . "\n");
