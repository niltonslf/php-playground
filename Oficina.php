<?php

class Oficina
{

    public function __construct(array $veiculos)
    {
        $this->proximo($veiculos);
    }

    public function manutencao(Veiculo $veiculo)
    {
        $veiculo->listarVerificacoes();
        $veiculo->ajustar();
        $veiculo->limpar();
        $this->mudarOleo($veiculo);

    }

    private function mudarOleo(Veiculo $veiculo)
    {
        if ($veiculo instanceof Automovel) {
            echo "Método mudarOleo executo para um automóvel";
        }
    }

    public function proximo(array $veiculos)
    {
        foreach ($veiculos as $key => $veiculo) {
            $this->manutencao($veiculo);
            echo "\n------------------------\n";
        }
    }
}