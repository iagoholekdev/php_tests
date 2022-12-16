<?php

require_once('validacoes.php');
require_once('pessoa.php');
require_once('validacoesPessoa.php');

$pessoa = new Pessoa("Iago", 24, "Rua zap", "32250610");
$validacoes = new Validacoes();
$pessoaValidacao = new PessoaValidacao($validacoes, $pessoa);
$pessoaValidacao->isNomeVazio();
$pessoaValidacao->isIdadeInvalida();
$pessoaValidacao->isEnderecoVazio();
$pessoaValidacao->isTelefoneVazio();


print("Usuário: "  . $pessoa->nome . "\n" .
      "Idade: "    . $pessoa->idade . "\n" .
      "Endereço: " . $pessoa->endereco . "\n" .
      "Telefone: " . $pessoa->telefone . "\n");
