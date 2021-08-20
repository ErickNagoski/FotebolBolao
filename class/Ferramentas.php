<?php
include_once('Bolao.php');
include_once('Apostador.php');
class Ferramentas
{
    private $serializacao;
    private $bolao;

    function __construct()
    {
    }

    function salva($arquivo, $conteudo)
    {
        $this->serializacao = serialize($conteudo);
        file_put_contents($arquivo,$this->serializacao);
        return true;
    }

    function leitura($arquivo)
    {
        $this->serializacao = file_get_contents($arquivo);
		$this->bolao = unserialize($this->serializacao);
    return $this->bolao;
    }

    function getNome()
    {
        $bolao = new Bolao("oi");
       // $bolao = $this->leitura("serializacoes/bolao_serializado");
        return $bolao->getNome();
    }
}
