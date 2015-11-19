<?php
class Pessoa
{
    public $codigo;
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $email;

    public function __construct($codigo='',$nome='',$cpf='',$endereco='',$telefone='',$email='')
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf  = $cpf;
        $this->endereco= $endereco;
        $this->telefone=$telefone;
        $this->email = $email;
    }
    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }
}
?>
