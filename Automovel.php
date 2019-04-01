<?php

class Automovel extends Veiculo
{
    public function ajustar()
    {
        echo "Método ajustar executado num automovel\n";
    }

    public function limpar()
    {
        echo "Método limpar executado num automovel\n";
    }

    public function listarVerificacoes()
    {
        echo "Método listarVerificacoes executado num automovel\n";
    }

    public function mudarOleo()
    {
        echo "Óleo trocado";
    }

}