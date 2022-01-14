<?php

require_once "Conexao.php";

class Filmes{

    private $id;
    private $titulo;
    private $imagem;
    private $sipnose;
    private $data;
    private $diretor;
    private $duracao;
    private $categoria;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
        return $this;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem=$imagem;
        return $this;
    }

    public function getSipnose(){
        return $this->sipnose;
    }

    public function setSipnose($sipnose){
        $this->sipnose = $sipnose;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getDiretor(){
        return $this->diretor;
    }

    public function setDiretor($diretor){
        $this->diretor = $diretor;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function salvar(){
        $tabela = "filmes";
        $colunas = "titulo, imagem, sipnose, data, diretor, duracao, categoria";
        $valores = " '". $this->titulo ."' , '" . $this->imagem . "' , '" . $this->sipnose . "' , '". $this->data . "' , '". $this->diretor . "' , '. $this->duracao' ";
        Conexao::insert($tabela, $colunas, $valores);
    }

    public function atualizar(){
        $tabela = "filmes";
        $parametros = "titulo='". $this->titulo."' , imagem=".$this->imagem." , sipnose='".$this->sipnose."' , data='". $this->data."' , diretor='". $this->diretor."' , duracao='. $this->duracao'";
        
        Conexao::update($tabela, $parametros, $this->id);
    }

    public static function retornarTodos(){
        $tabela = "filmes";
        $colunas = "id, titulo, imagem, sipnose, data, diretor, duracao";

        $dados = Conexao::select($tabela, $colunas);
        $filmes = [];
        foreach($dados as $d){
            $filme = new Feijao();
            $filme->id = $d["id"];
            $filme->titulo = $d["titulo"];
            $filme->imagem = $d["imagem"];
            $filme->sipnose = $d["sipnose"];
            $filme->data = $d["data"];
            $filme->diretor = $d["diretor"];
            $filme->duracao = $d["duracao"];
            $filmes[] = $filme;
        }
        return $filmes;
    }

    public static function retornarPorId($id){
        $tabela = "filmes";
        $colunas = "id, titulo, imagem, sipnose, data, diretor, duracao";

        $dados = Conexao::selectById($tabela, $colunas, $id);
        
        foreach($dados as $d){
            $filme = new Feijao();
            $filme->id = $d["id"];
            $filme->titulo = $d["titulo"];
            $filme->imagem = $d["imagem"];
            $filme->sipnose = $d["sipnose"];
            $filme->data = $d["data"];
            $filme->diretor = $d["diretor"];
            $filme->duracao = $d["duracao"];
            return $filme;
        }
        return null;
    }

    public static function deletar($id){
        Conexao::delete("filmes", $id);
    }
}