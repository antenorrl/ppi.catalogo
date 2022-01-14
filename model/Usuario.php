<?php

require_once "Conexao.php";

class Usuario{

    private $id;
    private $nome;
    private $email;
    private $senha;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function salvar(){
        $tabela = "usuario";
        $colunas = "nome, email, senha";
        $valores = " '". $this->nome ."' , '" . $this->email . "','" . $this->senha . "' ";
        Conexao::insert($tabela, $colunas, $valores);
    }
}