<?php
interface I_Validacoes {
  public function isNomeVazio(String $nome): bool;
  public function isIdadeInvalida(int $idade): bool;
  public function isEnderecoVazio(String $endereco): bool;
  public function isTelefoneVazio(String $telefone): bool;
 }

interface I_ValidacoesPessoa {
  public function isNomeVazio();
  public function isIdadeInvalida();
  public function isEnderecoVazio();
  public function isTelefoneVazio();
}