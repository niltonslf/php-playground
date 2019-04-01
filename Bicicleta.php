<?php
require './Veiculo.php';

class Bicicleta extends Veiculo
{
    public function ajustar()
    {
        echo "Método ajustar executado numa bicicleta\n";
    }

    public function limpar()
    {
        echo "Método limpar executado numa bicicleta\n";

    }

    public function listarVerificacoes()
    {
        echo "Método listarVerificacoes executado numa bicicleta\n";

    }

}