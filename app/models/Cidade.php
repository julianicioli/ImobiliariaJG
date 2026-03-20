<?php

class Cidade
{
    public $id;
    public $nome;
    public $estado;

    public function __construct(string $nome, string $estado)
    {
        $this-> setNome ($nome);
        $this-> setEstado ($estado);
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEstado(): string 
    {
        return $this->estado;
    }
    public function setId( ?int $id)
    {
        if ($this->id === null){
            $this->id = $id;
        }
    }
    public function setNome(string $nome)
    {
        $nome = trim($nome); // Remove espaços em branco no início e no final

        if (empty($nome)){
           throw new Exception("O nome da cidade é obrigatório.");
    }    

    $this->nome = $nome;
}
    public function setEstado(string $estado)
    {
        $estado = strtoupper(trim($estado)); // Remove espaços em branco e converte para maiúsculas

        if (strlen($estado) !== 2){
            throw new Exception("O estado da cidade deve ter exatamente 2 caracteres.");
        }
        $this->estado = $estado;
    }
}