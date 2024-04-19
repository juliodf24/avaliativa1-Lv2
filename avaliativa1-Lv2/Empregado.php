<?PHP
class Empregado
{
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    function getNome()
    {
        return $this->nome;
    }
    function getSobrenome()
    {
        return $this->sobrenome;
    }
    function getSalarioMensal()
    {
        return $this->salarioMensal;
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    function setSalarioMensal($salarioMensal)
    {
        $this->salarioMensal = $salarioMensal;
    }
    function getSalarioAnual()
    {
        return 12 * ($this->salarioMensal);
    }

    function aumento($porcentagem)
    {
        $salarioAtual = $this->getSalarioMensal();
        $salarioNovo = 12 * ($salarioAtual * (1+($porcentagem/100)));
        return $salarioNovo;
    }
}

// avaliativa1-Lv2
